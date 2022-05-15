<?php


function square(&$a)
{
    $a *= $a;
}

$number = 5;
square($number);


function &checkName(&$name)
{
    if($name === "admin") $name = "Tom";
    return $name;
}

$userName = "admin";
$checkedName = &checkName($userName);
echo "<br />userName: $userName";
echo "<br />checkedName: $checkedName";
