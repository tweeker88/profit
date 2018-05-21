<?php

$articles = new \App\Models\News\News();

$main = new \App\Models\View();

$article = $articles->getArticle($_GET['id']);

if(false !== $article){
    $main->assign('article', $article);
    $main->display(__DIR__ . '/templates/article.php');
}else{
    header("HTTP/1.0 404 Not Found");
    $main->display(__DIR__ . '/templates/404.php');
}




