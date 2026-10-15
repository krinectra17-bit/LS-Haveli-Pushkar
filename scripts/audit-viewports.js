/**
 * Comprehensive Mobile Responsiveness Audit Tool via Chrome DevTools Protocol
 * Tests viewports: 320, 360, 375, 390, 414, 430, 768, 1024, 1280, 1440
 */

const { spawn } = require('child_process');
const http = require('http');
const fs = require('fs');
const path = require('path');

const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
const viewports = [
  { width: 320, height: 568, name: 'iPhone SE (320px)' },
  { width: 360, height: 800, name: 'Compact Android (360px)' },
  { width: 375, height: 667, name: 'iPhone 8/SE2 (375px)' },
  { width: 390, height: 844, name: 'iPhone 12/13/14 (390px)' },
  { width: 414, height: 896, name: 'iPhone XR/11 (414px)' },
  { width: 430, height: 932, name: 'iPhone 14/15/16 Pro Max (430px)' },
  { width: 768, height: 1024, name: 'iPad / Tablet (768px)' },
  { width: 1024, height: 768, name: 'Laptop / Tablet Landscape (1024px)' },
  { width: 1280, height: 800, name: 'Standard Desktop (1280px)' },
  { width: 1440, height: 900, name: 'Large Desktop (1440px)' }
];

async function run() {
  console.log('--- Launching Headless Chrome for Viewport Audit ---');
  const chrome = spawn(chromePath, [
    '--headless=new',
    '--remote-debugging-port=9223',
    '--no-first-run',
    '--no-default-browser-check',
    '--disable-gpu',
    '--window-size=1920,1080',
    'http://localhost:3001'
  ]);

  // Wait 1.5s for Chrome to initialize
  await new Promise(r => setTimeout(r, 1500));

  const listRes = await new Promise((resolve, reject) => {
    http.get('http://127.0.0.1:9223/json/list', res => {
      let data = '';
      res.on('data', c => data += c);
      res.on('end', () => resolve(JSON.parse(data)));
    }).on('error', reject);
  });

  const page = listRes.find(p => p.type === 'page');
  if (!page || !page.webSocketDebuggerUrl) {
    console.error('No page found in Chrome CDP');
    chrome.kill();
    return;
  }

  const ws = new WebSocket(page.webSocketDebuggerUrl);
  let id = 1;
  const pending = new Map();

  ws.onmessage = (event) => {
    const msg = JSON.parse(event.data);
    if (msg.id && pending.has(msg.id)) {
      const { resolve, reject } = pending.get(msg.id);
      pending.delete(msg.id);
      if (msg.error) reject(msg.error);
      else resolve(msg.result);
    }
  };

  await new Promise(resolve => ws.onopen = resolve);

  function send(method, params = {}) {
    return new Promise((resolve, reject) => {
      const msgId = id++;
      pending.set(msgId, { resolve, reject });
      ws.send(JSON.stringify({ id: msgId, method, params }));
    });
  }

  await send('Page.enable');
  await send('DOM.enable');

  const screenshotsDir = path.join(__dirname, '..', 'screenshots');
  if (!fs.existsSync(screenshotsDir)) fs.mkdirSync(screenshotsDir);

  console.log('\n======================================================');
  console.log('STARTING VIEWPORT AUDIT (10 VIEWPORTS)');
  console.log('======================================================\n');

  let allResults = [];

  for (const vp of viewports) {
    // Set device metrics
    await send('Emulation.setDeviceMetricsOverride', {
      width: vp.width,
      height: vp.height,
      deviceScaleFactor: 1,
      mobile: vp.width < 900,
      fitWindow: false
    });

    await send('Page.navigate', { url: 'http://localhost:3001' });
    // Wait for render
    await new Promise(r => setTimeout(r, 600));

    // Audit DOM metrics
    const evalResult = await send('Runtime.evaluate', {
      expression: `
        (() => {
          const targetWidth = ${vp.width};
          const bodyWidth = document.body.scrollWidth;
          const docWidth = document.documentElement.scrollWidth;
          const innerWidth = window.innerWidth;
          const hasOverflow = docWidth > targetWidth + 1 || bodyWidth > targetWidth + 1;

          // Check for overflowing elements
          const overflowing = [];
          document.querySelectorAll('*').forEach(el => {
            const rect = el.getBoundingClientRect();
            // Ignore fixed backdrop/modal overlays which intentionally stretch full screen or sit offcanvas
            if (el.closest('.mobile-nav-backdrop') || el.closest('.mobile-nav-drawer') || el.closest('.booking-modal') || el.closest('.lightbox-modal')) return;
            if (rect.width > targetWidth + 1 || rect.right > targetWidth + 1) {
              const tag = el.tagName.toLowerCase();
              const cls = el.className && typeof el.className === 'string' ? '.' + el.className.trim().split(/\s+/).join('.') : '';
              const id = el.id ? '#' + el.id : '';
              overflowing.push({
                selector: tag + id + cls,
                width: Math.round(rect.width),
                right: Math.round(rect.right),
                excess: Math.round(Math.max(rect.right, rect.width) - targetWidth)
              });
            }
          });

          // Check header elements
          const logo = document.querySelector('.site-logo');
          const logoRect = logo ? logo.getBoundingClientRect() : null;
          const header = document.querySelector('.site-header');
          const headerRect = header ? header.getBoundingClientRect() : null;
          const toggle = document.querySelector('.mobile-nav-toggle');
          const toggleVisible = toggle ? window.getComputedStyle(toggle).display !== 'none' : false;

          // Hero headline
          const heroTitle = document.querySelector('.hero-title');
          const heroTitleStyle = heroTitle ? window.getComputedStyle(heroTitle) : null;

          return {
            innerWidth,
            docWidth,
            hasOverflow,
            overflowExcess: Math.max(0, docWidth - targetWidth),
            overflowCount: overflowing.length,
            overflowing: overflowing.slice(0, 25),
            header: {
              height: headerRect ? Math.round(headerRect.height) : 0,
              logoWidth: logoRect ? Math.round(logoRect.width) : 0,
              toggleVisible
            },
            hero: {
              fontSize: heroTitleStyle ? heroTitleStyle.fontSize : 'N/A',
              lineHeight: heroTitleStyle ? heroTitleStyle.lineHeight : 'N/A'
            }
          };
        })()
      `,
      returnByValue: true
    });

    const res = evalResult.result.value;
    allResults.push({ name: vp.name, width: vp.width, ...res });

    const status = res.hasOverflow ? '❌ OVERFLOW' : '✅ NO OVERFLOW';
    console.log(`[${vp.name}] ${status} (Doc: ${res.docWidth}px, Win: ${res.innerWidth}px, Excess: ${res.overflowExcess}px)`);
    if (res.hasOverflow) {
      console.log(`   Overflowing elements (${res.overflowCount}):`);
      res.overflowing.forEach(o => {
        console.log(`     - ${o.selector}: width=${o.width}px, right=${o.right}px (+${o.excess}px)`);
      });
    }

    // Capture screenshot for key viewports
    if ([320, 375, 430, 768, 1280].includes(vp.width)) {
      const ss = await send('Page.captureScreenshot', { format: 'png' });
      fs.writeFileSync(path.join(screenshotsDir, `viewport-${vp.width}.png`), Buffer.from(ss.data, 'base64'));
      console.log(`   Captured screenshot: screenshots/viewport-${vp.width}.png`);
    }
  }

  ws.close();
  chrome.kill();

  console.log('\n======================================================');
  console.log('AUDIT SUMMARY');
  console.log('======================================================');
  const fails = allResults.filter(r => r.hasOverflow);
  if (fails.length === 0) {
    console.log('ALL VIEWPORTS PASSED WITH ZERO HORIZONTAL OVERFLOW!');
  } else {
    console.log(`${fails.length} OF ${allResults.length} VIEWPORTS HAD OVERFLOW ISSUES.`);
  }
}

run().catch(err => {
  console.error(err);
  process.exit(1);
});
