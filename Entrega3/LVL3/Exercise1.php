<?php

$arrayNums = [];

//YOU CAN ADD THE NUMBER OF YOUR CHOICE TO THE ARRAY IN THIS CASE '1000'
for($i = 1; $i <= 1000; $i++){
    $arrayNums[] = $i;
}

//PASO LA FUNCION A UN ARRAY NUEVO QUE POBLARE CON LOS NUMEROS PRIMEROS
$numsPrimers = erastotenes100($arrayNums);

//IMPRIMO EL ARRAY COMPLETO PARA VER LOS RESULTADOS, FUTURAMENTE CAMBIAR POR UN FOR EACH
print_r($numsPrimers);

//FUNCTION
function erastotenes100(array $arrayNums) : array{
    $arrayDelete= [];
    $numMax = max($arrayNums);
    for($i = 2; ($i**2) < $numMax; $i++) {
        if(!in_array($i, $arrayDelete)){
            for($j = 2; ($i * $j) <= $numMax; $j++){
                $numDelete = ($i * $j);
                if(!in_array($numDelete, $arrayDelete)){
                    $arrayDelete[] = $numDelete;
                }
            }
            }
        }
        foreach($arrayDelete as $num) {
            $index = array_search($num, $arrayNums);
            unset($arrayNums[$index]);
        }
        
        return $arrayNums = array_values($arrayNums);
    }