<?php

    class Circle implements Shapes {
        protected $radius;
        const PI = 3.1416;

        public function __construct($radius){
            $this->radius = $radius;
        }
        
        public function calcArea() {
            return self::PI * ($this->radius * $this->radius);
        }
    }