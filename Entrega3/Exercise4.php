<?php

//TEST
counter(20 , 3);


//FUNCTION DECLARATION
function counter($limit, $counter){
    for($i = 0; $i <= $limit;){
        echo $i . " ";
        $i += $counter;
    }
}

