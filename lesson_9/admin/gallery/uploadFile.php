<?php

$result = new \App\Models\Gallery\Uploader($_FILES['pic']);

if($result->isUploaded()){
    $result->upload();
}
