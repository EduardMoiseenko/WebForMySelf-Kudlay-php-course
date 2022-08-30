<?php error_reporting(-1);
// TODO add 1 element to array

$goods = [
    [
        'title' => 'Nokia',
        'price' => 100,
        'description' => 'Description'
    ],
    [
        'title' => 'iPad',
        'price' => 200,
        'description' => 'Description'
    ],
    [
        'title' => 'Sony',
        'price' => 300,
        'description' => 'Description'
    ]
];

/*echo $goods[0]['title'] . ' - ' . $goods[0]['price'];
echo '<br>';
echo $goods[1]['title'] . ' - ' . $goods[1]['price'];*/

$i = 0;
while($i < 3){
    echo $goods[$i]['title'] . ' - ' . $goods[$i]['price'];
    echo '<br>';
    $i++;
}