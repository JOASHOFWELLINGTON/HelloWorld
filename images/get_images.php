<?php
// Directory containing your images
$imageDir = 'https://github.com/JOASHOFWELLINGTON/HelloWorld/tree/3ba823ce607bc0521a1fa68a337554fe98c03c61/images';

// Get all files in the directory
$images = glob($imageDir . '*');

// Filter out non-image files
$images = array_filter($images, function($file) {
    return preg_match('/\.(jpg|jpeg|png|gif)$/i', $file);
});

// Return the list of image filenames as JSON
header('Content-Type: application/json');
echo json_encode($images);
?>
