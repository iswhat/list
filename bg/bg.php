<?php
// 图片目录
$dir = 'images/';

// 获取图片列表
$files = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

// 随机获取一张图片
$file = $files[array_rand($files)];

// 输出图片
header('Content-Type: image/jpeg');
header('Location: ' . $file, true, 302);
exit;
?>