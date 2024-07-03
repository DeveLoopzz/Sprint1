<?php

    class Shape {
        protected $base;
        protected $height;

        //CONSTRUCTOR
        public function __construct($base, $height) {
            $this->base = $base;
            $this->height = $height;
        }

    //GETTERS
        protected function getBase() {
           return $this->base;
        }

        protected function getHeight() {
           return $this->height;
        }
    //SETTERS
        protected function setBase($base) {
            $this->base = $base;
        }
        protected function setHeight($height) {
            $this->height = $height;
        }
}


