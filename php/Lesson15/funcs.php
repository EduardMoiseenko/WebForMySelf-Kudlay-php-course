<?php

/*function sum($a = 1, $b = 2){
	$a = 300;
	echo $a + $b;
	echo '<br>';
}*/

/*function sum(&$a, $b){
	echo $a + $b;
	echo '<br>';
	$a = 100;
}*/

function sum($a, $b){
	// echo $a + $b;
	/*$c = $a + $b;
	return $c;*/
	return $a + $b;
}

function my_array_keys($arr){
	$data = [];
	foreach($arr as $k => $v){
		$data[] = $k;
	}
	return $data;
}