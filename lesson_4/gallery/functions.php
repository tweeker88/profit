<?php

function getImg(){
    $path = __DIR__ . '/img/';

    $handle = opendir($path);
    $arrayImg = [];

    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            $arrayImg[] = __DIR__ . '/img/' . $entry;
        }
    }

    return $arrayImg;

}

function UploadImg($file)
{
    $path = __DIR__ . '/img';
    if( 0 == $file['error']){
        if($file['type'] == 'image/jpeg' || $file['type'] == 'image/png' ){

            $result = move_uploaded_file($file["tmp_name"],$path . '/' . $file['name']);

            return $result ;
        }else{
            return false;
        }
    }


}