<?php

namespace App\Models\GuestBook;

Class GuestBook
{
    protected $path;
    protected $data = [];


    public function __construct()
    {

        $this->path = __DIR__ . '/../../../resourses/book.txt';
        $lines = file( $this->path, FILE_IGNORE_NEW_LINES);

        foreach ($lines as $line){
            $this->data[] = new \App\Models\GuestBook\GuestBookRecord($line);
        }
    }

    public function getRecord()
    {

        return $this->data;
    }

    public function append(GuestBookRecord $record)
    {
        $this->data[] = $record;
    }

    public function save()
    {
        $lines = [];

        foreach ($this->data as $record){
            $lines[] = $record->getMessage();
        }

        file_put_contents($this->path, implode("\n", $lines));
    }


}