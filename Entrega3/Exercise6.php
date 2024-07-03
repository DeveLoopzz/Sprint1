<?php

echo isBitten();

function isBitten() : String {
    $bite = rand(1,2);

    if($bite == 1) {
        $response = "Ouch! stop Charlie!";
    }
    else {
        $response = "good boy Charlie!";
    }
    return $response;
}