<?php


$condition = true;
if($condition){

    $name = "Tom";
}
echo $name; // Tom


$i = 6;
switch($i){

    case 5: $name = "Tom"; break;
    case 6: $name = "Bob"; break;
    default: $name = "Sam"; break;
}
echo $name; // Bob


function showName(){
    $name = "Tom";
    echo $name;
}

showName();
echo $name; // так написать нельзя, так как
// переменная $name существует
// только внутри функции showName(

function getCounter()
{
    static $counter = 0;
    $counter++;
    echo $counter;
}
getCounter(); // counter=1
getCounter(); // counter=2
getCounter(); // counter=3

$name = "Tom";
function hello()
{
    global $name;
    echo "Hello " . $name;
}
hello();    // Hello Tom


$name = "Tom";
function changeName()
{
    global $name;
    $name = "Tomas";
    //$GLOBALS["name"] = "Tomas";
}
changeName();
echo $name; // Tomas

echo "Новое имя: " . $name;