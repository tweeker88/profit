<?php

require_once __DIR__ . '/DB.php';

class Article
{
    protected $title;
    protected $text;
    protected $author;

    public function __construct($title, $text, $author)
    {
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;

    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getAuthor()
    {
        return $this->author;
    }
}