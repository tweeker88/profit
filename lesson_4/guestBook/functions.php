<?php

function getString()
{
    $pathToFile = __DIR__ . '/book.txt';
    $file = file($pathToFile);
    return $file;
}
function getAddSingle($string,$getSingle)
{
    $string[] = $getSingle;
    $stringToFile = implode(PHP_EOL, $string);

    $pathToFile = __DIR__ . '/book.txt';


    $file = fopen($pathToFile,'w+');
    fwrite($file,$stringToFile);
    fclose($file);

    header('Location:/lesson_4/guestBook/');
}