<?php
//error_reporting(-1);

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

$a = 5;
$a = $a + 1; // $a++
var_dump($a);
echo '<br>';
var_dump($a--);
echo '<br>';
var_dump(++$a);

echo '<br><br>';
$str1 = 'Hello,';
$str2 = ' world';
$str = $str1 . $str2;
echo $str;

echo '<br><br>';

$fruit = 'apple';
echo $winnie_pooh = "Hello, I'm Winnie. I have 2 {$fruit}s";
echo '<br>';
echo $winnie_pooh = 'Hello, I"m Winnie. I have 2 ' . $fruit . 's';

echo '<br><br>';

$a = 5;
$a = $a + 2;
var_dump($a);
echo '<br>';
$a += 2;
$a *= 2;
var_dump($a);

echo '<br><br>';
$str1 = 'Hello,';
echo $str1 .= ' world';

echo '<br><br>';

// NULL
var_dump($var2); // null
$var2 = '';
unset($var2);
$var2 = null;
$var2++;
var_dump($var2);
