<?php
require_once __DIR__ . '/../classes/GuestBook.php';
require_once __DIR__ . '/../classes/GuestBookRecord.php';
require_once __DIR__ . '/../classes/View.php';

$guestBook = new GuestBook();

if(isset($_POST['message'])){

    $newLine = new GuestBookRecord($_POST['message']);

    $guestBook->append($newLine);
    $guestBook->save();

    header('Location: /lesson_7/guestBook/');
}else{
    $main = new View();

    $main->assign('records', $guestBook->getRecord());
    $main->display( __DIR__ . '/../templates/guestBook.php');
}


