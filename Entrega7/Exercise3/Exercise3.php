<?php

class Cat {
    private $name = "Misifu";
    private $age = 2;

    public function __construct(){
        
    }

    public function __toString(){
        return "Your cat name is " . $this->name . " and is " . $this->age . " years old.";
    }
}

$cat1 = new Cat();

echo $cat1->__toString();



