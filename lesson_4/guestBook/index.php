<?php
include __DIR__ . '/functions.php';

$file = getString();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GuestBook</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row">
        <div class="container">
            <?php foreach ($file as $single): ?>
                <div class="col-md-12">
                    <?php echo $single; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <form method="POST" action="/lesson_4/guestBook/uploadSingle.php">
                <div class="form-group">
                    <label for="exampleInputSingle">Добавить запись</label>
                    <input type="text" class="form-control" name="single" id="exampleInputSingle"placeholder="Запись">
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </div>

</body>
</html>
