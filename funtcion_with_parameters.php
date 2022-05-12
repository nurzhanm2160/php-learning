<?php
function displayInfo($name, $age)
{
    echo "имя: $name, возраст: $age<hr>";
}

displayInfo('Nurzhan', 21);
displayInfo(name: 'Nurzhan', age: 21);

function sum(...$nums)
{
    $count = 0;
    foreach ($nums as $num) {
        $count += $num;
    }
    echo "сумма: $count";
}

sum(1, 2, 3, 4, 5);


function getAverageScore($name, ...$scores)
{
    $result = 0.0;
    foreach ($scores as $score) {
        $result += $score;
    }
    $result = $result / count($scores);
    echo "<p>$name: $result</p>";
}

getAverageScore("Tom", 5, 5, 4, 5);
getAverageScore("Bob", 4, 3, 4, 4, 4);
