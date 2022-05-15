<?php
    $a = 5;
    if ($a > 0){
        echo "Переменная a больше нуля";
    }
    elseif ($a < 0){
        echo "Переменная a меньше нуля";
    }
    else{
        echo "Переменная a равна нулю";
    }

    if (0) {}       // false
    if (-0.0) {}    // false
    if (-1) {}      // true
    if ("") {}      // false (пустая строка)
    if ("a") {}     // true (непустая строка)
    if (null) {}    // false (значие отсутствует)

    $a = 1;
    $b = 2;
    $z = $a < $b ? $a + $b : $a - $b;
    echo $z;