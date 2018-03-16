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
