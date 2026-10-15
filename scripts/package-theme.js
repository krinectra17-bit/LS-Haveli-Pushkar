/**
 * Build Script: Packages the L S Haveli WordPress Theme into an installable ZIP archive
 * Suitable for upload via WP Admin -> Appearance -> Themes -> Add New -> Upload Theme
 */

const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const rootDir = path.resolve(__dirname, '..');
const distDir = path.join(rootDir, 'dist');
const themeDir = path.join(distDir, 'ls-haveli');
const zipFile = path.join(rootDir, 'ls-haveli-theme.zip');

console.log('--- Packaging L S Haveli WordPress Theme ---');

// 1. Clean dist & existing zip
if (fs.existsSync(distDir)) {
  fs.rmSync(distDir, { recursive: true, force: true });
}
if (fs.existsSync(zipFile)) {
  fs.unlinkSync(zipFile);
}

fs.mkdirSync(themeDir, { recursive: true });

// 2. Files and directories to include in WordPress Theme
const themeFiles = [
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
  'README.md'
];

const themeFolders = [
  'inc',
  'template-parts',
  'assets'
];

// Copy files
themeFiles.forEach(file => {
  const src = path.join(rootDir, file);
  const dest = path.join(themeDir, file);
  if (fs.existsSync(src)) {
    fs.copyFileSync(src, dest);
    console.log(`Copied: ${file}`);
  }
});

// Copy directories recursively
function copyDir(src, dest) {
  fs.mkdirSync(dest, { recursive: true });
  const entries = fs.readdirSync(src, { withFileTypes: true });
  for (const entry of entries) {
    const srcPath = path.join(src, entry.name);
    const destPath = path.join(dest, entry.name);
    if (entry.isDirectory()) {
      copyDir(srcPath, destPath);
    } else {
      fs.copyFileSync(srcPath, destPath);
    }
  }
}

themeFolders.forEach(folder => {
  const src = path.join(rootDir, folder);
  const dest = path.join(themeDir, folder);
  if (fs.existsSync(src)) {
    copyDir(src, dest);
    console.log(`Copied directory: ${folder}/`);
  }
});

// 3. Create ZIP using PowerShell Compress-Archive
console.log('Compressing into ls-haveli-theme.zip...');
try {
  const psCmd = `powershell -NoProfile -Command "Compress-Archive -Path '${themeDir}' -DestinationPath '${zipFile}' -Force"`;
  execSync(psCmd, { stdio: 'inherit' });
  const stat = fs.statSync(zipFile);
  console.log(`Success! WordPress Theme Archive created: ls-haveli-theme.zip (${(stat.size / 1024 / 1024).toFixed(2)} MB)`);
} catch (err) {
  console.error('Error creating ZIP archive:', err);
  process.exit(1);
}
