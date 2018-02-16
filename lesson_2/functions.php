<?php

function tableAnd($x, $y)
{
    if ($x && $y) {
        return 1;
    } else {
        return 0;
    }
}

function tableOr($x, $y)
{
    if ($x || $y) {
        return 1;
    } else {
        return 0;
    }
}

function tableXor($x, $y)
{
    if ($x xor $y) {
        return 1;
    } else {
        return 0;
    }
}

function searchDesc($a, $b, $c)
{
    $desc = pow($b,2) - 4 * $a * $c;

    if ($desc >= 0) {

        if ($desc > 0) {
            $xOne = -$b / (2 * $a);
            $xTwo = $b / (2 * $a);
            return 'x1 = ' . $xOne . ' и x2 = ' . $xTwo;
        } else {
            $x = - $b / (2 * $a);
            return $x;
        }

    } else {
        return 'Дискременант меньше нуля,решений нет';
    }
}
function getGender($name)
{
    if(!preg_match("/[\d]+/", $name)){ // Проверяет есть ли цифры в строке
        if(mb_strstr(mb_substr($name, -1),'а') || mb_strstr(mb_substr($name, -1),'я')){ // Проверка по окончанию
            echo "Вы ввели женское имя";
        }else{
            echo "Вы ввели мужское имя";
        }
    }else{
        return null;
    }
}
