<?php

    $a = 2;
    switch ($a) {
        case 1:
            echo 'сложение';
            break;
        case 2:
            echo 'вычитание';
            break;
        case 3:
            echo 'умножение';
            break;
        case 4:
            echo 'деление';
            break;
        default:
            echo 'действие по умолчанию';
            break;
    }


    $b = 1;
    $operation = match($b)
    {
        1 => 'сложение',
        2 => 'вычитание',
        3 => 'умножение',
        4 => 'делание',
        default => 'действие по умолчанию',
    };