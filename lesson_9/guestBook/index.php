<?php

require_once __DIR__ . '/../autoload.php';

$guestBook = new \App\Models\GuestBook\GuestBook();

$main = new \App\Models\View();

$main->assign('records', $guestBook->getRecord());
$main->display(__DIR__ . '/../templates/guestBook.php');

if(isset($_POST['message'])){

    $newLine = new \App\Models\GuestBook\GuestBookRecord($_POST['message']);

    $guestBook->append($newLine);
    $guestBook->save();

}


