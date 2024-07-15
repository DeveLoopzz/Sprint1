<?php

    abstract class Animal{
        protected $name;

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

