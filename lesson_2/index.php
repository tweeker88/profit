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
<? include __DIR__ . '/functions.php';?>
<div class="container">
    <div class="row">
        <h4 style="text-align: center">Напишите программу, которая составит и выведет в браузер таблицу истинности
            для логических операторов &&, || и xor.</h4>
        <div class="col-md-4">
            <table class="table-bordered">
                <tr>
                    <th>а</th>
                    <th>b</th>
                    <th>a AND b</th>
                </tr>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td><?php echo tableAnd(0, 0)  ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>0</td>
                    <td><?php echo tableAnd(0, 1)  ?></td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>1</td>
                    <td><?php echo tableAnd(0, 1)  ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td><?php echo tableAnd(1, 1)  ?></td>
                </tr>
            </table>
        </div>

        <div class="col-md-4">
            <table class="table-bordered">
                <tr>
                    <th>а</th>
                    <th>b</th>
                    <th>a OR b</th>
                </tr>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td><?php echo tableOr(0, 0)  ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>0</td>
                    <td><?php echo tableOr(0, 1)  ?></td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>1</td>
                    <td><?php echo tableOr(0, 1)  ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td><?php echo tableOr(1, 1)  ?></td>
                </tr>
            </table>
        </div>

        <div class="col-md-4">
            <table class="table-bordered">
                <tr>
                    <th>а</th>
                    <th>b</th>
                    <th>a XOR b</th>
                </tr>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td><?php echo tableXor(0, 0)  ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>0</td>
                    <td><?php echo tableXor(0, 1)  ?></td>
                </tr>
                <tr>
                    <td>0</td>
                    <td>1</td>
                    <td><?php echo tableXor(0, 1)  ?></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td><?php echo tableXor(1, 1)  ?></td>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <row>
        <h4 style="text-align: center">Составьте функцию вычисления дискриминанта квадратного уравнения. Покройте ее тестами.
            Используя эту функцию, напишите программу, которая решает квадратное уравнение. Оформите красивый вывод решения.</h4>
        <div class="col-md-12">
            <b>Ответ: </b><?php echo searchDesc(1,-8,12); ?>
        </div>
    </row>
    <hr>
    <row>
        <h4 style="text-align: center">Проведите самостоятельное исследование на тему "Что возвращает оператор include,
            если его использовать как функцию?"</h4>
        <div class="col-md-12">
            <?php

            var_dump(include(__DIR__.'/test.php')); // Вернет 1 и содержимое подключаемого файла
            var_dump(include(__DIR__.'/test2.php')); // Вернет FALSE

            $returnFile = include 'return.php';

            echo $returnFile; // выведет 'return PHP'

            $noReturnFile = include 'noreturn.php';

            echo $noReturnFile; // выведет 1
        /* Так как include - это специальная языковая конструкция, круглые скобки не обязательны вокруг аргумента.
            В качестве аргумента передается путь до файла.Если файл найден,то возвращает значение 1, если файл пустой.
            Если файл не пустой возвращает еще и его содержимое.
            Возвращает FALSE при ошибке и выдает предупреждение
        */
        ?>
        </div>
    </row>
    <hr>
    <div class="row">
        <h4 style="text-align: center"> Составьте функцию, которая на вход будет принимать имя человека,
            а возвращать его пол, пытаясь угадать по имени (null - если угадать не удалось). </h4>
        <?php echo getGender("Альберт");?>
    </div>
</div>


</body>
</html>