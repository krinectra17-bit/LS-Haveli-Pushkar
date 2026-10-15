/**
 * Theme Validation and Quality Assurance Test Suite
 */

const fs = require('fs');
const path = require('path');

console.log('====================================================');
console.log('L S HAVELI THEME & PREVIEW VALIDATION AUDIT');
console.log('====================================================\n');

let errors = [];
let warnings = [];
let passed = 0;

function assert(condition, message) {
  if (condition) {
    console.log(`[PASS] ${message}`);
    passed++;
  } else {
    console.error(`[FAIL] ${message}`);
    errors.push(message);
  }
}

// 1. Required WordPress Theme Files
console.log('--- 1. Checking WordPress Theme Hierarchy Files ---');
const requiredFiles = [
  'style.css',
  'screenshot.png',
  'functions.php',
  'index.php',
  'front-page.php',
  'header.php',
  'footer.php',
  'page.php',
  'single.php',
  'archive.php',
  '404.php',
  'inc/customizer.php',
  'inc/template-tags.php'
];

requiredFiles.forEach(file => {
  assert(fs.existsSync(file), `WordPress required file exists: ${file}`);
});

// 2. Required Template Parts
console.log('\n--- 2. Checking Template Parts ---');
const templateParts = [
  'template-parts/hero.php',
  'template-parts/booking-bar.php',
  'template-parts/intro.php',
  'template-parts/rooms.php',
  'template-parts/pool-garden.php',
  'template-parts/dining.php',
  'template-parts/facilities.php',
  'template-parts/pushkar-guide.php',
  'template-parts/gallery.php',
  'template-parts/reviews.php',
  'template-parts/location.php',
  'template-parts/cta.php'
];

templateParts.forEach(part => {
  assert(fs.existsSync(part), `Template part exists: ${part}`);
});

// 3. WordPress Metadata in style.css
console.log('\n--- 3. Checking style.css Theme Headers ---');
const styleContent = fs.readFileSync('style.css', 'utf8');
assert(styleContent.includes('Theme Name: L S Haveli Pushkar'), 'style.css has Theme Name');
assert(styleContent.includes('Version: 1.0.0'), 'style.css has Version');
assert(styleContent.includes('Text Domain: ls-haveli'), 'style.css has Text Domain');
assert(styleContent.includes('Requires PHP: 7.4'), 'style.css has Requires PHP');
assert(styleContent.includes('Requires at least: 6.0'), 'style.css has Requires at least WP');

// 4. Authentic Hotel Photographs in assets/images/
console.log('\n--- 4. Checking Authentic Hotel Photographs ---');
const images = [
  'assets/images/hero-courtyard-pool.jpg',
  'assets/images/facade-night.jpg',
  'assets/images/swimming-pool-garden.jpg',
  'assets/images/room-luxury-balcony.jpg',
  'assets/images/room-deluxe-double.jpg',
  'assets/images/logo.svg',
  'assets/images/logo-light.svg',
  'assets/images/favicon.svg',
  'assets/images/arch-divider.svg'
];

images.forEach(img => {
  assert(fs.existsSync(img), `Image asset verified: ${img}`);
  if (fs.existsSync(img)) {
    const stat = fs.statSync(img);
    assert(stat.size > 100, `Image size valid (${stat.size} bytes): ${img}`);
  }
});

// 5. JavaScript Syntax Validation
console.log('\n--- 5. Checking JavaScript Syntax & Booking Logic ---');
try {
  require('./assets/js/main.js');
} catch (e) {
  // In Node environment window/document aren't defined, but we can syntax-check via new Function()
  const jsContent = fs.readFileSync('assets/js/main.js', 'utf8');
  try {
    new Function(jsContent.replace(/\bwindow\b|\bdocument\b/g, '({})'));
    assert(true, 'assets/js/main.js has valid JavaScript syntax');
  } catch (parseErr) {
    assert(false, `assets/js/main.js syntax error: ${parseErr.message}`);
  }
}

const jsCode = fs.readFileSync('assets/js/main.js', 'utf8');
assert(jsCode.includes('generateWhatsAppBookingUrl'), 'WhatsApp message URL encoder function exists');
assert(jsCode.includes('checkInInput.value'), 'Check-in validation implemented');
assert(jsCode.includes('checkOutDate <= checkInDate'), 'Check-out later than check-in validation implemented');
assert(jsCode.includes('openLightbox'), 'Gallery lightbox handler implemented');

// 6. CSS Syntax Check
console.log('\n--- 6. Checking CSS Syntax & Design Tokens ---');
const cssContent = fs.readFileSync('assets/css/main.css', 'utf8');
assert(cssContent.includes('--bg-primary: #FAF8F3'), 'Design token --bg-primary configured');
assert(cssContent.includes('--bg-secondary: #F0E8DC'), 'Design token --bg-secondary configured');
assert(cssContent.includes('--accent-gold: #A88B5B'), 'Design token --accent-gold configured');
assert(cssContent.includes('@media (max-width: 640px)'), 'Mobile breakpoint 640px exists');
assert(cssContent.includes('@media (max-width: 360px)'), 'Mobile breakpoint 360px exists');
assert(cssContent.includes('prefers-reduced-motion'), 'Accessibility reduced-motion query exists');

// 7. Standalone HTML Preview
console.log('\n--- 7. Checking Standalone HTML Preview ---');
assert(fs.existsSync('index.html'), 'index.html preview exists');
const htmlContent = fs.readFileSync('index.html', 'utf8');
assert(htmlContent.includes('bookingModal'), 'Booking modal included in index.html');
assert(htmlContent.includes('lightboxModal'), 'Lightbox modal included in index.html');
assert(htmlContent.includes('hero-courtyard-pool.jpg'), 'Hero image referenced in index.html');
assert(htmlContent.includes('floating-whatsapp-btn'), 'Floating WhatsApp action included in index.html');
assert(htmlContent.includes('application/ld+json'), 'Schema.org JSON-LD structured data included in index.html');

console.log('\n====================================================');
console.log(`AUDIT RESULTS: ${passed} checks passed, ${errors.length} errors, ${warnings.length} warnings.`);
console.log('====================================================\n');

if (errors.length > 0) {
  process.exit(1);
}
