<?php
    $array = [1, 2, 3, 4, 5];
    $array = array(1, 2, 3, 4, 5);

    echo $array[2]; // 3

    $array[] = 6;
    echo $array[5]; // 6

    print_r($array); // Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )


    $numbers = [1=> 1, 2=> 4, 5=> 25, 4=> 16];
    echo $numbers[2];   // 4

    $numbers = [4=> 16, 25, 36, 49, 64];
    print_r($numbers); // Array ( [4] => 16 [5] => 25 [6] => 36 [7] => 49 [8] => 64 )

    foreach ($numbers as $number)
    {
        echo $number . "<br/>";
    }

    foreach ($array as $key => $value)
    {
        echo "$key - $value";
    }





