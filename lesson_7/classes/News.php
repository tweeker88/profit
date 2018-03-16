<?php

require_once __DIR__ . '/Article.php';

Class News
{

    protected $articles = [];


    public function __construct()
    {
        $this->articles[] = new Article('Тестовая запись 1', 'Тестовый текст 1');
        $this->articles[] = new Article('Тестовая запись 2', 'Тестовый текст 2');
        $this->articles[] = new Article('Тестовая запись 3', 'Тестовый текст 3');

    }

    public function getArticles()
    {
        return $this->articles;
    }

    public function getArticle($id)
    {
        return $this->articles[$id] ?? null;
    }



}