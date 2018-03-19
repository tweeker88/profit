<?php
require_once __DIR__ . '/../classes/News.php';
require_once __DIR__ . '/../classes/Article.php';
require_once __DIR__ . '/../classes/View.php';

$articles = new News();

$main = new View();

$main->assign('articles', $articles->getArticles());
$main->display('news');



