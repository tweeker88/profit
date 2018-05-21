<?php

namespace App\Models\Gallery;

Class Gallery
{
    protected $arrayImg = [];


    public function __construct()
    {

        $this->path = __DIR__ . '/../../../resourses/img/';

        $handle = opendir($this->path);

        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                $this->arrayImg[] = new \App\Models\Gallery\Image(__DIR__ . '/resourse/img/' . $entry);
            }
        }

    }

    public function getImg()
    {
        return $this->arrayImg;
    }

    public function append(Image $img)
    {
        $this->arrayImg = $img;
    }

    public function upload($file)
    {
        if( 0 == $file['error']){
            if($file['type'] == 'image/jpeg' || $file['type'] == 'image/png' ){

                $result = move_uploaded_file($file["tmp_name"],$this->path . $file['name']);
                return $result ;
            }else{
                return false;
            }
        }
    }
}