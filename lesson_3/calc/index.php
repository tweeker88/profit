<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Lesson 2</title>
</head>
<body>
<div class="container">
    <?php
        include __DIR__ . '/function.php';
        if(!empty($_GET)){
            $operation = $_GET['operation'];
            $one = (int)$_GET['one'];
            $two =  (int)$_GET['two'];
        }
        $operations = ['+', '-', '*', '/'];
    ?>
    <form method="GET">
        <div class="form-group">
            <label for="one">Первое значение</label>
            <input
                value="<?php if(isset($_GET['one']))  echo $_GET['one'];?>"
                type="number"
                class="form-control"
                id="one"
                name="one"
            >
        </div>
        <select class="form-control" name="operation">
            <?php foreach ($operations as $single): ?>
            <option
                value="<?php echo $single;?>"
                <?php if((isset($operation)) && $operation == $single): ?> selected <?php endif; ?>
            >
                <?php echo $single;?>
            </option>
            <?php endforeach; ?>
        </select>
        <div class="form-group">
            <label for="two">Второе значение</label>
            <input
                value="<?php if(isset($_GET['two']))  echo $_GET['two'];?>"
                type="number"
                class="form-control"
                id="two"
                name="two"
            >
        </div>
        <button type="submit" class="btn btn-default">Посчитать</button>
    </form>
    <hr>
<?php
    if(!empty($_GET)){
        echo calc($one,$two,$operation);
    }
?>
</div>
</body>
</html>