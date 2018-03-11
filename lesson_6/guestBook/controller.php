<?php

require_once __DIR__ . '/../classes/GuestBook.php';

$guestBook = new GuestBook(__DIR__ . '/book.txt');

$file = $guestBook->getData();

if(isset($_POST['single']))
{
    $guestBook->append($_POST['single']);
    $guestBook->save();
}

