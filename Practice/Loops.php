<?php

// X is 0; zolang x kleiner is of gelijk aan 10; X + 1
for($x = 0; $x <= 10; $x++){
    echo "Number is: ${x}<br>";
}
echo '<br>';

// $x = 2;

// while($x <= 25){
//     echo $x;
//     $x++;
// }

$weekdagen=['maandag','dinsdag','woensdag'];

// for($x = 0; $x < count($weekdagen); $x++){
//     echo $weekdagen[$x],'<br>';
// }

$people = [
    'first_name' => 'Thies',
    'last_name' => 'van der Zon',
    'leeftijd'  => '18'
];
foreach($people as $key => $value){
    echo $key .'-' .$value .'<br>';
}