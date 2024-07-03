<?php

$min = 10;

echo calculatePrice($min);

function calculatePrice($min) : float{
    $price = 0;
    if($min <= 3) {
        $price = 0.10;
    }
    else if($min > 3){
        $diffMins = $min - 3;
        $price = 0.10 +($diffMins*0.05);
    }
    return $price;
}