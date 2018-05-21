<?php

require_once __DIR__ . '/../autoload.php';

$text = new \App\Models\Text(__DIR__ . '/../resourses/about.txt');

$main = new \App\Models\View();

$main->assign('text', $text->getText());
$main->display(__DIR__ . '/../templates/admin/about.php');

if(isset($_POST['upload'])){
    $text->setText($_POST['text']);
}



