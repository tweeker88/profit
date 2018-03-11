<?php

Class Uploader
{
    protected $path = __DIR__ . '/../gallery/img';
    protected $file;

    public function __construct($pic)
    {
        $this->file = $pic;
    }

    public function isUploaded()
    {
        return  empty($_FILES['pic']);

    }

    public function upload()
    {
        if( 0 == $this->file['error']){
            if($this->file['type'] == 'image/jpeg' || $this->file['type'] == 'image/png' ){

                $result = move_uploaded_file($this->file["tmp_name"],$this->path . '/' . $this->file['name']);

                return $result ;
            }else{
                return false;
            }
        }
    }

}