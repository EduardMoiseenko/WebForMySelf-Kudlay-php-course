<?php
error_reporting(-1);

// $this = '123';

$var = 'pencil';

/*
boolean^ true | false
integer
float
string
*/

$var = false;
var_dump($var);
echo '<br><br>';
echo gettype($var);

echo '<br><br>';
$int = 10;
var_dump($int);

echo '<br><br>';
$int = '10';
var_dump($int + 5);

echo '<br><br>';
$fl = 1.2;
var_dump($fl);

echo '<br><br>';
$var = 10;
$str = 'This is string. $var';
$str2 = "This is string. Var = $var";
echo $str2 = 'This is \'string\'. Var = $var';
echo '<br>';
echo $str2 = "This is \"string\". Var = $var";
echo '<br>';
var_dump($str);
echo '<br>';
var_dump($str2);

echo '<br><br>';
//HEREDOC
$str3 = <<<HERE
This is "string". $var
HERE;
echo $str3;

echo '<br><br>';
//NOWDOC
$str4 = <<<'HERE'
This 'is' "string". $var
HERE;
echo $str4;

?>




