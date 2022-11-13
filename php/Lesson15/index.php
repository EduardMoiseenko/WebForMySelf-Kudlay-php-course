<?php error_reporting(-1);

require_once 'funcs.php';

$nums = [1,2,3];
$names = ['Ivanov', 'Petrov'];
$names2 = ['Ivan' => 'Ivanov', 'Petr' => 'Petrov'];
$test = [];

$keys = array_keys($nums);
print_r($keys);

$keys2 = my_array_keys($nums);
print_r($keys2);
$keys3 = my_array_keys($test);
print_r($keys3);

/*echo count($nums);
echo count($names);*/

/*$a = 200;

$x = 100;
$y = 10;

sum(5,7);
sum(10,5);
sum(5,10);
sum($x, $y);
sum(100);

echo $a;*/

/*$a = 5;
$b = 10;
echo $a;
echo '<br>';
sum($a,$b);
echo $a;*/

/*$res = sum(1,2);
echo $res;*/

// echo sum(1,2);