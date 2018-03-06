<?php

include __DIR__ . '/functions.php';

$result = UploadImg($_FILES['pic']);

if($result){
    header('Location:/lesson_4/gallery/');
}else{
    echo "Вы загрузили не картинку!";
}
