<?php

    class Circle extends Shape{
        protected $radius;
        const PI = 3.1416;

        public function __construct(float $float){
            $this->radius = $float;
        }

        public function calcArea() {
            return self::PI * ($this->radius * $this->radius);
        }
    }