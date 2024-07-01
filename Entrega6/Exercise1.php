<?php

    abstract class Animal{
        private $name;

        public function __construct($name) {
            $this->name = $name;
        }

        //GETTERS
        public function getName() {
            return $this->name;
        }

        //SETTERS
        public function setName($name) {
            $this->name = $name;
        }
        
        abstract public function makeSound();
}

    class Dog extends Animal {

        public function __construct($name){
            parent::__construct($name);
        }

        public function makeSound() {
            return "Guau Guau!";
        }
}

class Cat extends Animal {

    public function __construct($name){
        parent::__construct($name);
    }

    public function makeSound() {
        return "Meow Meow";
    }
}