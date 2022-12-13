<?php

/*
< kleiner dan
> groter dan
<= kleiner dan of gelijk aan
>= groter dan of gelijk aan
== gelijk aan
=== indetiek aan
!== niet gelijk aan
!=== niet identiek aan
*/

// $age = 19;

// if($age < 18){
//     echo 'je mag legaal drinken';
// }else{
//     echo 'jammer joh';
// }

// $datum = 18;
// echo $datum;

// if($datum < 12){
//     echo 'goedemorgen';
// }elseif($datum < 17){
//     echo 'goedemiddag';
// }else{
//     echo 'goedeavond';
// }

$posts = [ 'first','second' ];

// if(!empty($posts)){
//     echo $posts[1];
// }else{
//     echo 'geen posts';
// }

// If en else korter geschreven 
// $firstposy = !empty ($posts) ? $posts[0]: null;
// echo $firstposy;


$favcolor = '';

switch($favcolor){
    case 'red':
        echo 'je kleur is red';
        break;
    case 'blue':
        echo 'je kleur is blue';
        break;
    case 'yellow':
        echo 'je kleur is yellow';
        break;
    default:
        echo 'je bent gay';
}