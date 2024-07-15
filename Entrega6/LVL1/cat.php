<?php

class Cat extends Animal {

    public function __construct($name){
        parent::__construct($name);
    }

    public function makeSound() {
        return $this->name . ": Meow Meow";
    }
}