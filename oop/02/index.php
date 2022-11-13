<?php

require_once 'classes/Car.php';

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car();
$car2 = new Car();
debug($car1);

$car1->color = 'black';
$car1->brand = 'volvo';
$car1->speed = 200;
$car1->year = 2018;
$car1->colour = 'green';

$car2->color = 'white';
$car2->brand = 'bmw';
$car2->speed = 250;
$car2->year = 2017;

//debug($car1);
//debug($car2);

echo "<p>About my car:</p>
Brand:{$car1->brand}<br>
Color:{$car1->color}<br>
Wheels:{$car1->wheels}<br>
Year:{$car1->year}<br>
Speed:{$car1->speed}<br>";
