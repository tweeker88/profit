<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
</head>
<body>
<?php
include __DIR__ . '/functions.php';
$arrayImg = getImg();

foreach ($arrayImg as $item): ?>

<img src="<?php echo $item; ?>" width="150px">

<?php endforeach; ?>

<form action="/lesson_6/gallery/uploadFile.php" enctype = 'multipart/form-data' method="POST">
    <p>Загрузите файл с картинкой</p>
    <p><input type="file" name="pic"></p>
    <button type="submit">Отправить</button>
</form>
</body>
</html>