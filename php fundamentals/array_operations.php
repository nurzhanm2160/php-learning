<?php

$users = ["Tom", "Bob", "Sam"];
$isArray = is_array($users);
echo ($isArray==true)?"это массив":"это не массив";

$users = ["Tom", "Bob", "Sam"];
$number = count($users);
// то же самое, что
// $number = sizeof($users);
echo "В массиве users $number элемента/ов";

$users = ["Tom", "Bob", "Sam", "Alice"];
shuffle($users);
print_r($users);
// один из возможных вариантов
//Array ( [0] => Bob [1] => Tom [2] => Alice [3] => Sam )

$model = "Apple II";
$producer = "Apple";
$year = 1978;

$data = compact("model", "producer", "year");
print_r($data);
// получится следующий вывод
// Array ( [model] => Apple II [producer] => Apple [year] => 1978 )

$users = ["Tom", "Bob", "Sam", "Alice"];
asort($users);
print_r($users);
// вывод отсортированного массива
// Array ( [3] => Alice [1] => Bob [2] => Sam [0] => Tom )

$states = ["Spain" => "Madrid", "France" => "Paris", "Germany" => "Berlin", ];
asort($states);
print_r($states);
// массив после asort   - сортировка по значениям элементов
// Array ( [Germany] => Berlin [Spain] => Madrid [France] => Paris )

ksort($states);
print_r($states);
// массив после ksort - сортировка по ключам элементов
//  Array ( [France] => Paris [Germany] => Berlin [Spain] => Madrid )

$os = array("Windows 7", "Windows 8", "Windows 10");
natsort($os);
print_r($os);
// результат
// Array ( [0] => Windows 7 [1] => Windows 8 [2] => Windows 10)

natcasesort($os); // Учитывеает регистр