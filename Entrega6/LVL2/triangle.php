<?php 

class Triangle extends Shape {
    //METHODS
    public function calcArea() {
        return ($this->base * $this->height) / 2;
    }
}