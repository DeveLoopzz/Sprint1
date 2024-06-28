<?php

$palabras = ["Hola", "PHP" , "Haribo"];

echo isFoundCharacter($palabras, "f");

function isFoundCharacter($array, $char) : bool{
    $response = true;
        for($i = 0; $i < count($array) && $response; $i++){
            if(stripos($array[$i], $char) !== false){
                $response = true;
            }
            else{
                $response = false;
            }
        }
    return $response;
}

//STRIPOS INSTEAD OF STRPOS FOR IGNORE UPPER OR LOWER CASE CHARACTER USEFULL!!!!!!!!