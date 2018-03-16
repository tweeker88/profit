<?php

require_once __DIR__ . '/../classes/Uploader.php';

$result = new Uploader($_FILES['pic']);

if($result->isUploaded()){
    $result->upload();
}
