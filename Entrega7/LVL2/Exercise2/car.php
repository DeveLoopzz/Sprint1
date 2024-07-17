<?php
    require 'turbo.php';

    class Car {
        //PODRIAS USAR UN ENUM PARA MARCA
        private $marca;
        private $matricula;
        //PODRIAS USAR UN ENUM PARA FUEL⛽⛽⛽⛽
        private $fuel;
        private $maxSpeed;

        use Turbo;

        //CONSTRUCTOR
        public function __construct($marca, $matricula, $fuel, $maxSpeed){
            $this->marca = $marca;
            $this->matricula = $matricula;
            $this->fuel = $fuel;
            $this->maxSpeed = $maxSpeed;
        }

        //GETTERS
        public function getMarca() {
            return $this->marca;
        }
        public function getMatricula() {
            return $this->matricula;
        }
        public function getFuel() {
            return $this->fuel;
        }
        public function getMaxSpeed() {
            return $this->maxSpeed;
        }

        //SETTER
        public function setMarca($marca) {
            $this->marca = $marca;
        }
        public function setMatricula($matricula) {
            $this->matricula = $matricula;
        }
        public function setFuel($fuel) {
            $this->fuel = $fuel;
        }
        public function setMaxSpeed($maxSpeed) {
            $this->maxSpeed = $maxSpeed;
        }
    }