<?php


// fn(params) => action
function sum($numbers, $condition)
{
    $result = 0;
    foreach ($numbers as $number)
    {
        if($condition($number))
        {
            $result += $number;
        }
    }
    return $result;
}


$myNumbers = [-2, -1, 0, 1, 2, 3, 4, 5];
$positiveSum = fn($number) => $number > 0;

echo sum($myNumbers, $positiveSum);