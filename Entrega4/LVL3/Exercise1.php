<?php

$array = [1,2,3,4,5];

$arrayCube = array_map('cube',$array);


function cube($number){
    return $number ** 3;
}

print_r($arrayCube);