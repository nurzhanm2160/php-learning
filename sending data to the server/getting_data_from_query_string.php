<?php

$name = 'не определенно';
$age = 'не определенно';

if(isset($_GET['name']))
{
    $name = $_GET['name'];
}

if(isset($_GET['age']))
{
    $age = $_GET['age'];
}

echo 'Имя: '.$name.' Возраст: '.$age;