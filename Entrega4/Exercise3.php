<?php

$palabras = ["abcd","abcd","abcd"];

echo isFoundCharacter($palabras, "a" );

function isFoundCharacter($array, $char) : bool{
    $response = true;
        foreach($array as $word){
            if(stripos($word, $char) === false){
                $response = false;
            }
        }
    return $response;
}
//STRIPOS INSTEAD OF STRPOS FOR IGNORE UPPER OR LOWER CASE CHARACTER USEFULL!!!!!!!!
