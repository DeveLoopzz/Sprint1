<?php

    class Shape {
        private $base;
        private $height;

        //CONSTRUCTOR
        public function __construct($base, $height) {
            $this->base = $base;
            $this->height = $height;
        }

    //GETTERS
        public function getBase() {
           return $this->base;
        }

        public function getHeight() {
           return $this->height;
        }
    //SETTERS
        public function setBase($base) {
            $this->base = $base;
        }
        public function setHeight($height) {
            $this->height = $height;
        }
}

class Triangle extends Shape {

    //CONSTRUCTOR
    public function __construct($base, $height) {
        parent::__construct($base, $height);
    }

    //METHODS
    public function calcArea() {
        return (parent::getBase() * parent::getHeight()) / 2;
    }
}

class Rectangle extends Shape {

    //CONSTRUCTOR
    public function __construct($base, $height) {
        parent::__construct($base, $height);
    }

    //METHODS
    public function calcArea() {
        return (parent::getBase() * parent::getHeight());
    }
}