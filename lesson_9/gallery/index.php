<?php

require_once __DIR__ . '/../autoload.php';

$gallery = new \App\Models\Gallery\Gallery();
$main = new \App\Models\View();

$main->assign('arrayImg', $gallery->getImg());
$main->display(__DIR__ . '/../templates/admin/gallery.php');




