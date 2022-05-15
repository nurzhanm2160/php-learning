<?php

function checkForIsSet($value)
{
    if(isset($value))
    {
        echo 'значение существует';
    } else {
        echo 'значения не существует';
    }
}

function checkForEmpty($value)
{
    if(empty($value))
    {
        echo 'значения не существует';
    } else {
        echo 'значение есть';
    }
}

$number = 1;
checkForIsSet($number); // значение существует
checkForEmpty($number); // значение есть

unset($number); // удалит значения $number;

