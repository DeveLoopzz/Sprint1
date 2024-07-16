<?php

class Rectangle implements Shapes {
    protected $base;
    protected $height;

    public function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;
    }

    public function calcArea(){
        return $this->base * $this->height;
    }
}