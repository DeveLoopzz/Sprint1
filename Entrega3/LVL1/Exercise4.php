<?php

//TEST
counter(20);


//FUNCTION DECLARATION
function counter(int $limit,int $counter = 1){
    $i = 0;
    while($i <= $limit) {
        echo $i . "<br>";
        $i += $counter;
    }
}

