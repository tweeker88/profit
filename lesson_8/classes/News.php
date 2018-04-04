<?php

require_once __DIR__ . '/Article.php';

Class News
{

    protected $articles = [];


    public function __construct()
    {
        $this->articles = new Article();

    }

    public function getArticles()
    {
        return $this->articles->findAll('Article');
    }

    public function getArticle($id)
    {
        return $this->articles->findOne($id, 'Article');
    }

}