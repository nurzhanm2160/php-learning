<?php


$generator = function()
{
    for($i = 0; $i <= 5; $i++)
    {
        yield $i;
    }
};

foreach ($generator() as $generatedNumber)
{
    echo $generatedNumber . '</br>';
}


$generator2 = function()
{
    yield 1;
    yield from [2, 3, 4];
    yield 5;
};

foreach($generator2 as $generatedNumber)
{
    echo $generatedNumber . '</br>';
}