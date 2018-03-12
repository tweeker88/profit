<?php

Class TextFile
{
    protected $data;
    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
        $this->data = file($path);
    }

    public function getData()
    {
        return $this->data;
    }

    public function append($text)
    {
        $this->data[] = $text . PHP_EOL;

        return $this;
    }

    public function save()
    {
        file_put_contents($this->path, $this->data);
    }
}