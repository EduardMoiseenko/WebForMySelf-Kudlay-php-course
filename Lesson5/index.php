<?php
//Урок 5.Операторы в PHP. Часть 1
error_reporting(-1);

/*
Арифметически операторы
"+" сложение $a + $b
"-" вычитание $a - $b
"*" умножение $a * $b
"/" деление $a / $b
"-$a" отрицание (смена знака $a)
"$a % $b" деление по модулю (остаток от деления)
"$a ** $b" возведение в степень
"=" присваивание (установка значения)
"&" присваивание по ссылке
============================
"++$a" префиксный инкремент
"$a++" постфиксный инкремент
"--$a" префиксный декремент
"$a++" постфиксный декремент
"." конкатенация (склеивание строк)
комбинированные операторы
*/

echo -5 - 3 * 5;
echo '<br><br>';
echo 5 / 3;
echo '<br><br>';
echo 10 % 3;
echo '<br><br>';
echo 2 ** 3;
echo '<br><br>';
echo pow(2, 4);
echo '<br><br>';

$a = 5;
$b = $a;
var_dump($a);
echo '<br>';
$a = 7;
var_dump($a);
echo '<br>';
var_dump($b);

echo '<br><br>';
$a = 5;
$b = &$a;
var_dump($a);
echo '<br>';
$b = 7;
var_dump($a);
echo '<br>';
var_dump($b);

echo '<br><br>';
echo 5 + 't3est';