<?php

$directory = '/var/www/img/xiuren/img';
$subdirs = array_filter(glob("$directory/*"), 'is_dir');

$random_subdir = $subdirs[array_rand($subdirs)];
$images = glob("$random_subdir/*.{jpg,jpeg,png,gif}", GLOB_BRACE);

$random_image = $images[array_rand($images)];

// Keep only the last two parts of the directory
$relative_path = implode('/', array_slice(explode('/', $random_image), -3, 3));

// Extract album and image filename
$path_parts = explode('/', $relative_path);
$album = $path_parts[1];
$image_filename = pathinfo($path_parts[2], PATHINFO_FILENAME);

header('Content-Type: application/json');
echo json_encode(['url' => $relative_path, 'album' => $album, 'img' => $image_filename]);

?>
