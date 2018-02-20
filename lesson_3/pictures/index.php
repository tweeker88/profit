<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pictures</title>
</head>
<body>
<?php $pathToPic = include __DIR__ . '/pathToImg.php'; ?>

<?php foreach ($pathToPic as $key => $single): ?>
    <a href="image.php?id=<?php echo $key; ?>">
        <img style="width: 200px" src="<?php echo __DIR__ . $single; ?>" alt="">
    </a>

<?php endforeach; ?>

</body>
</html>
