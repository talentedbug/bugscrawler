<?php

$directory = '/var/www/video/xiuren/video';
$subdirs = array_filter(glob("$directory/*"), 'is_dir');

$random_subdir = $subdirs[array_rand($subdirs)];
$videos = glob("$random_subdir/*.{mp4,mkv,avi}", GLOB_BRACE);

$random_video = $videos[array_rand($videos)];

// Keep only the last two parts of the directory
$relative_path = implode('/', array_slice(explode('/', $random_video), -3, 3));

// Extract album and video filename
$path_parts = explode('/', $relative_path);
$album = $path_parts[1];
$video_filename = pathinfo($path_parts[2], PATHINFO_FILENAME);

header('Content-Type: application/json');
echo json_encode(['url' => $relative_path, 'album' => $album, 'video' => $video_filename]);

?>
