<?php

function calc($one, $two, $operation)
{
    switch ($operation){
        case '+':
            return $answer = $one + $two;
            break;
        case '-':
            return $answer = $one - $two;
            break;
        case '*':
            return $answer = $one * $two;
            break;
        case '/':
            if($two === 0){
                return "Деление на ноль невозможно!";
            }
            return $answer = $one / $two;
            break;
    }
}