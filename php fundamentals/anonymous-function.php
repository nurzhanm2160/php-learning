<?php

$sum = function($a, $b)
{
    return $a + $b;
};
$number = $sum(5, 11);  //16
echo $number;

function welcome($message)
{
    $message();
}
$goodMorning = function() { echo "<h3>Доброе утро</h3>"; };
$goodEvening = function() { echo "<h3>Добрый вечер</h3>"; };

welcome($goodMorning);          // Доброе утро
welcome($goodEvening);          // Добрый вечер
welcome(function(){ echo "<h3>Привет</h3>"; }); // Привет


function sum($numbers, $condition)
{
    $result = 0;
    foreach($numbers as $number){
        if($condition($number))
        {
            $result += $number;
        }
    }
    return $result;
}

// для четных чисел
$isEvenNumber = function($n){ return $n % 2 === 0;};
// для положительных чисел
$isPositiveNumber = function($n){ return $n > 0;};

$myNumbers = [-2, -1, 0, 1, 2, 3, 4, 5];
$positiveSum = sum($myNumbers, $isPositiveNumber);
$evenSum = sum($myNumbers, $isEvenNumber);
echo "Сумма положительных чисел: $positiveSum <br /> Сумма четных чисел: $evenSum";