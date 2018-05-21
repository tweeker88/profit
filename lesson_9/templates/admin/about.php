<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 9</title>
    <script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
<ul class="nav nav-tabs">
    <li><a href="/lesson_9/index.php"> Сайт</a></li>
    <li><a href="/lesson_9/admin/index.php"> Обо мне</a></li>
    <li><a href="/lesson_9/admin/gallery/index.php">ФотоГалерея</a></li>
    <li><a href="/lesson_9/admin/guestBook/index.php">Гостевая книга</a></li>
</ul>

<div class="panel panel-default">
    <div class="panel-body">
        <form action="/lesson_9/admin/index.php" method="POST">
            <textarea name="text" id="text" cols="30" rows="10" >
                <?php echo $text; ?>
            </textarea>
            <button type="submit" name="upload">Редактировать</button>
        </form>
    </div>
</div>

</body>
</html>