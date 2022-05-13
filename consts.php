<?php


const PI = 3.14;
echo PI;
define("NUMBER", 22);
echo NUMBER;

if(defined(PI))
{
    echo 'константа уже определена';
}