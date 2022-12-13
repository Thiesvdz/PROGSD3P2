<?php

$numbers = [1,4,6,96,126];
$fruits = array('appel', 'peer', 'banaan');

var_dump($numbers);
print_r($numbers);
print_r($fruits);
// echo $fruits[1];

$colors = [
    'red' => 'rood',
    'blue' => 'blauw',
    'green' => 'undef'
];

// echo $colors['red'];


$person = [
    'first_name' => 'Thies',
    'last_name' => 'van der Zon',
    'leeftijd'  => '18'
];

// echo $person['first_name'];

$person = [
    [
        'first_name' => 'Thies',
        'last_name' => 'van der Zon',
        'leeftijd'  => '18'
    ],
    [
        'first_name' => 'Ben',
        'last_name' => 'dawg',
        'leeftijd'  => '60000'
    ],
    
];
var_dump(json_encode($person));
// var_dump(json_decode($person));

// echo $person[1]['first_name'];