<?php
require_once __DIR__ . '/../classes/Gallery.php';
require_once __DIR__ . '/../classes/Image.php';
require_once __DIR__ . '/../classes/View.php';

$gallery = new Gallery();

$main = new View();

$main->assign('arrayImg', $gallery->getImg());
$main->display(__DIR__ . '/../templates/gallery.php');

if (!empty($_FILES['pic'])) {
    $gallery->upload($_FILES['pic']);
    header('Location: /lesson_7/gallery/');

}



