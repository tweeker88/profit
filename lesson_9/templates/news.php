<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News</title>
</head>
<body>
<?php foreach ($articles as $id => $article): ?>
    <a href="/lesson_8/article.php?id=<?php echo $article->getId();?>"><?php echo $article->getTitle();?></a>
    <hr>
<?php endforeach; ?>
</body>
</html>