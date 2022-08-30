<?php error_reporting(-1);
// TODO add 1 element to array

$arr = ['Ivanov', 'Petrov', 'Sidorov'];

//$arr[3] = 'Pupkin';
$arr[] = 'Pupkin';
$arr[] = 'Doe';
print_r($arr);

$names = [
    'Ivan' => 'Ivanov',
    'Petr' => 'Petrov',
    'Sidor' => 'Sidorov',
];
echo '<pre>';
print_r($names);
echo '</pre>';

/*$i = 1;
while( $i < 11 ){
	echo $i . "<br>";
	$i++;
}*/

/*for($i = 1; $i < 11; $i++){
	echo $i . "<br>";
}*/

for($i = 0; $i < count($arr); $i++ ){
    echo $arr[$i] . '<br>';
}