<?php
// Урок 7.Управляющие конструкции PHP. Условия
error_reporting(-1);

/*if(expression){
	instructions;
}*/

 $var = false;
 var_dump((bool) 0);
 echo '<br>';
 var_dump((bool) '');

echo '<br><br>';
$light = 'red';

if( $light == 'green' ){
	echo "We may go. Var Light = $light";
} else {
    echo "Stop. Var Light = $light";
}

echo '<br><br>';
var_dump( 5 < 3 );

echo '<br><br>';
if( 5 != 4 ){
	echo 'OK';
}

echo '<br><br>';
if( 5 != 4 ){
	echo 'OK';
	echo '<p>2</p>';
}

$light = 'green';
if ($light == 'green') {
    if (5 > 3) {
        echo '<p>5 > 3</p>';
    }
    echo 'We may go';
} elseif ($light == 'yellow') {
    echo 'We may ready';
} elseif ($light == 'violet') {
    echo 'We may ready';
} else {
    echo 'We must stop';
}