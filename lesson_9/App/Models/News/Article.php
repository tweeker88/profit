<?php

namespace App\Models\News;

class Article
{
    protected $id;
    protected $title;
    protected $text;
    protected $author;

    public function getTitle()
    {
        return $this->title;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function findAll(string $class)
    {
        $dbh = new \App\Models\DB(include __DIR__ . '/../../../configDB.php');

        $sql = 'SELECT * FROM news';
        $sth = $dbh->query($sql, [], $class);
        return $sth;
    }

    public function findOne($id, string $class)
    {
        $dbh = new \App\Models\DB(include __DIR__ . '/../../../configDB.php');

        $sql = 'SELECT * FROM news WHERE id=:id';
        $sth = $dbh->query($sql, [':id' => $id], $class);
        return $sth;
    }
}