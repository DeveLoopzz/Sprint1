<?php

$num =23;

$numsPrimers = [];

erastotenes($num);

print_r($numsPrimers);


function erastotenes($num){
    for($i = 2; $i < $num; $i++){
            if($num % $i != 0){
                $numsPrimers[] = $num;
            }
    }
}