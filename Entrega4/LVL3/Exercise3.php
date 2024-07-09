<?php 

$array1 = [];
$arrayPrimeros = [];

for($i = 2; $i <= 10; $i++){
    $array1  [] = $i;
}

$arrayReduced = array_reduce($array1, function($carry,$numPrimero){
    if(esPrimo($numPrimero)){
        $carry = $carry + $numPrimero;
    }
    return $carry;
}, 0);

print_r($arrayReduced);

function esPrimo($num) {
    for($i = 2; $i < $num; $i++){
    if($num % $i == 0) {
        return false;
        }  
    }
    return true;
}

