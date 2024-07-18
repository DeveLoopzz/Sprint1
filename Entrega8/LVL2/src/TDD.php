<?php 

//TEST
class Division {

    public function __construct(private int $num1) {}

//FUNCTION DECLARATION
public function division() : String{
    if($this->num1 < 33){
        $response = "L'alumne ha suspés";
    }
    else if($this->num1 <= 44){
        $response = "L'alumne es de tercera divisó";
    }
    else if($this->num1 <= 59){
        $response = "L'alumne es de segona divisó";
    }
    else{
        $response = "L'alumne es de primera divisó";
    }
    return $response;
    }

    public function setNum($num) {
        $this->num1 = $num;
    }
}