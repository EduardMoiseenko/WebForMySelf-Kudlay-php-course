<?php error_reporting(-1);

$arr = ['Ivanov', 'Petrov', 'Sidorov'];

$arr[5] = 'Pupkin';
$arr[] = 'Doe';
/*echo '<pre>';
print_r($arr);
echo '</pre>';*/

$names = [
    'Ivan' => 'Ivanov',
    'Petr' => 'Petrov',
    'Sidor' => 'Sidorov',
];

/*echo '<pre>';
print_r($names);
echo '</pre>';*/

/*echo '<select>';
for($i = 1900; $i <= 2016; $i++){
	echo "<option>$i</option>";
}
echo '</select>';*/

/*foreach($names as $name){
	echo $name . '<br>';
}*/

/*foreach($names as $name => $surname){
	echo "Name: $name, Surname: $surname <br>";
}*/

/*foreach($arr as $k => $v){
	echo "Key: $k, Name: $v <br>";
}*/

// $a = 2;
/*if( $a > 3 AND $a < 7 ){
	echo 'Ok';
}else{
	echo 'No';
}*/
/*if( $a > 3 || $a < 7 ){
	echo 'Ok';
}else{
	echo 'No';
}*/

for($i = 0; $i <= 30; $i++){
	echo $i . '<br>';
	if( $i == 5 ){
		echo '<h1>Found!!!</h1>';
		break;
	}
}

for($i = 0; $i <= 30; $i++){
    if( $i >= 10 && $i <= 20 ) continue;
    echo $i . '<br>';
}