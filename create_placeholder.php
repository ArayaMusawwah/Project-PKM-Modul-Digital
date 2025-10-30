<?php
// Script to create placeholder images for the tutorial

$images = [
    'persiapan.jpg',
    'rufus-download.jpg',
    'download-iso.jpg',
    'rufus-configuration.jpg',
    'bios-setting.jpg',
    'windows-installation.jpg',
    'setup-wizard.jpg'
];

foreach ($images as $image) {
    // Create a simple placeholder image
    $width = 800;
    $height = 450;
    
    $im = imagecreate($width, $height);
    
    // Define colors
    $background = imagecolorallocate($im, 230, 230, 250); // Light lavender
    $textColor = imagecolorallocate($im, 70, 70, 100); // Dark blue-gray
    
    // Fill background
    imagefill($im, 0, 0, $background);
    
    // Add text
    $text = "Gambar: {$image}";
    $font_size = 5;
    $text_width = imagefontwidth($font_size) * strlen($text);
    $text_height = imagefontheight($font_size);
    $x = ($width - $text_width) / 2;
    $y = ($height - $text_height) / 2;
    
    imagestring($im, $font_size, $x, $y, $text, $textColor);
    
    // Add description
    $desc = "Placeholder untuk {$image}";
    $desc_width = imagefontwidth(3) * strlen($desc);
    $desc_x = ($width - $desc_width) / 2;
    $desc_y = $y + 30;
    
    imagestring($im, 3, $desc_x, $desc_y, $desc, $textColor);
    
    // Save image
    imagejpeg($im, "images/{$image}", 90);
    
    // Free up memory
    imagedestroy($im);
    
    echo "Created placeholder: images/{$image}\n";
}
?>