<?php

$palabras = ["abcd","abcd","abcd"];

echo isFoundCharacter($palabras, "a" );

function isFoundCharacter($array, $char) : bool{
        foreach($array as $word){
            if(stripos($word, $char) === false){
                return false;
            }
        }
    return true;
}
//STRIPOS INSTEAD OF STRPOS FOR IGNORE UPPER OR LOWER CASE CHARACTER USEFULL!!!!!!!!
