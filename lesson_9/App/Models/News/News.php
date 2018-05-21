<?php

namespace App\Models\News;

Class News
{

    protected $articles = [];


    public function __construct()
    {
        $this->articles = new \App\Models\News\Article();

    }

    public function getArticles()
    {
        return $this->articles->findAll('\App\Models\News\Article');
    }

    public function getArticle($id)
    {
        return $this->articles->findOne($id, '\App\Models\News\Article');
    }

}