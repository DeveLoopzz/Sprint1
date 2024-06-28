<?php

echo isBitten();

function isBitten() {
    $bite = rand(1,2);

    if($bite == 1) {
        $response = "Ouch! stop Charlie!";
    }
    else {
        $response = "good boy Charlie!";
    }
    return $response;
}