<?php
require_once __DIR__ . '/../classes/News.php';
require_once __DIR__ . '/../classes/Article.php';
require_once __DIR__ . '/../classes/View.php';

$articles = new News();

$main = new View();
if($articles->getArticle($_GET['id'])){
    $main->assign('article', $articles->getArticle($_GET['id']));
    $main->display('singleArticle');
}else{
    header("HTTP/1.0 404 Not Found");
    $main->display('404');
}




