<?php

class Rectangle extends Shape {
    //METHODS
    public function calcArea() {
        return ($this->base * $this->height);
    }
}