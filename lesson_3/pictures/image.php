<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single image</title>
</head>
<body>
    <?php

        $pathToPic = include __DIR__ . '/pathToImg.php';
        $id = $_GET['id'] ?? null;

    ?>
<img src="<?php echo _DIR__ . $pathToPic[$id]; ?>" alt="">
</body>
</html>