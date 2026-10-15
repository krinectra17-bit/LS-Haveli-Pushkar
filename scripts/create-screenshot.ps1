Add-Type -AssemblyName System.Drawing

$width = 1200
$height = 900
$bitmap = New-Object System.Drawing.Bitmap($width, $height)
$g = [System.Drawing.Graphics]::FromImage($bitmap)
$g.InterpolationMode = [System.Drawing.Drawing2D.InterpolationMode]::HighQualityBicubic
$g.SmoothingMode = [System.Drawing.Drawing2D.SmoothingMode]::HighQuality

# Load hero photo
$heroPath = Join-Path $PSScriptRoot '..\assets\images\hero-courtyard-pool.jpg'
if (Test-Path $heroPath) {
    $heroImg = [System.Drawing.Image]::FromFile($heroPath)
    $g.DrawImage($heroImg, 0, 0, $width, $height)
    $heroImg.Dispose()
}

# Draw subtle gradient overlay at bottom
$brush = New-Object System.Drawing.SolidBrush([System.Drawing.Color]::FromArgb(215, 26, 23, 19))
$g.FillRectangle($brush, 0, 680, $width, 220)

# Accent gold line
$pen = New-Object System.Drawing.Pen([System.Drawing.Color]::FromArgb(255, 168, 139, 91), 3)
$g.DrawLine($pen, 0, 680, $width, 680)

# Fonts
$titleFont = New-Object System.Drawing.Font('Georgia', 34, [System.Drawing.FontStyle]::Bold)
$subFont = New-Object System.Drawing.Font('Arial', 14, [System.Drawing.FontStyle]::Regular)
$descFont = New-Object System.Drawing.Font('Arial', 12, [System.Drawing.FontStyle]::Regular)

$textBrush = New-Object System.Drawing.SolidBrush([System.Drawing.Color]::FromArgb(255, 255, 255, 255))
$goldBrush = New-Object System.Drawing.SolidBrush([System.Drawing.Color]::FromArgb(255, 223, 191, 134))
$mutedBrush = New-Object System.Drawing.SolidBrush([System.Drawing.Color]::FromArgb(255, 200, 195, 185))

$g.DrawString('L S HAVELI', $titleFont, $textBrush, 60, 705)
$g.DrawString('A HERITAGE LAKE VIEW HAVELI · PUSHKAR, RAJASTHAN', $subFont, $goldBrush, 62, 765)
$g.DrawString('Official WordPress Boutique Hotel Theme · Direct WhatsApp Booking System', $descFont, $mutedBrush, 62, 800)

$outPath = Join-Path $PSScriptRoot '..\screenshot.png'
$bitmap.Save($outPath, [System.Drawing.Imaging.ImageFormat]::Png)
$g.Dispose()
$bitmap.Dispose()

Write-Output 'Theme screenshot generated at screenshot.png'
