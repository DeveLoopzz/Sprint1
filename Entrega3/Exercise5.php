<?php 

//TEST
echo division(rand(1, 100));

//FUNCTION DECLARATION
function division($nota){
    if($nota < 33){
        $response = "L'alumne ha suspés";
    }
    else if($nota >= 33 && $nota <= 44){
        $response = "L'alumne es de tercera divisó";
    }
    else if($nota >= 45 && $nota <= 59){
        $response = "L'alumne es de segona divisó";
    }
    else if($nota >= 60){
        $response = "L'alumne es de primera divisó";
    }
    return $response;
}