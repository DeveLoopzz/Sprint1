<?php

$array1 = ["vaca", "perro", "gato", "gallina", "caballo"];

$array2 = array_filter($array1,'countCharacters');

print_r($array2);

function countCharacters($animal) :bool {
    return strlen($animal) % 2 == 0;
}

