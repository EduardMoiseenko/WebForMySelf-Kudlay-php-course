<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

/*$i = 1;
echo "<table border=\"1\">\n";
while($i <= 15){
	echo "\t<tr>\n";
	$n = 1;
	while($n <= 5){
		echo "\t\t<td>Row $i | Col - $n</td>\n";
		$n++;
	}
	echo "\t</tr>\n";
	$i++;
}
echo '</table>';*/

$x = 1;
echo "<table border='1'>\n";
while($x <= 10){
    echo "\t<tr>\n";
    $y = 1;
    while($y <= 10){
        echo "\t\t<td>$x * $y = " . $x * $y . "</td>\n";
        $y++;
    }
    echo "\t</tr>\n";
    $x++;
}
echo '</table>';

?>

</body>
</html>