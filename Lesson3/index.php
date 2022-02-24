<?php
// Урок 3.PHP переменные и константы
error_reporting(-1);

$var = 'Hello world';
$theVar = 'Winnie';
$fruit = 'apple';
$winnie_pooh = "Hello, I'm Winnie. I have 2 {$fruit}s";
$var = '123';
define("PAGE","new page");
//define("PAGE","new page2");

const PAGE2 = 'new const'
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Урок 3</title>
</head>
<body>
<h1><?php echo $var; ?></h1>
<h1><?php echo $theVar; ?></h1>
<h1><?php echo $winnie_pooh; ?></h1>
<h1><?php echo PAGE ?></h1>
<h1><?php echo PAGE2 ?></h1>

</body>
</html>