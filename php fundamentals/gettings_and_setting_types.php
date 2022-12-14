<?php
$a = 10.7;
gettype($a); // double
settype($a, "integer"); // integer. Теперь в $a хранится 10

$boolVar = false;
$intVar = (int)$boolVar; // 0

/*
is_integer()
is_is_integer($a): возвращает значение true, если переменная $a хранит целое число
is_string($a): возвращает значение true, если переменная $a хранит строку
is_double($a): возвращает значение true, если переменная $a хранит действительное число
is_numeric($a): возвращает значение true, если переменная $a представляет целое или действительное
     число или является строковым представлением числа. Например:
is_bool($a): возвращает значение true, если переменная $a хранит значение true или FALSE
is_scalar($a): возвращает значение true, если переменная $a представляет один из простых типов: строку,
     целое число, действительное число, логическое значение.
is_null($a): возвращает значение true, если переменная $a хранит значение null
is_array($a): возвращает значение true, если переменная $a является массивом
is_object($a): возвращает значение true, если переменная $a содержит ссылку на объект
*/