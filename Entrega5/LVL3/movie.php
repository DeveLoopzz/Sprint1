<?php

    class Movie{
        private $name;
        private $duration;
        private $director;

        //CONSTRUCTOR
        public function __construct($name, $duration, $director) {
            $this->name = $name;
            $this->duration = $duration;
            $this->director = $director;
        }

        //GETTERS
        public function getName(){
            return $this->name;
        }
        public function getDuration(){
            return $this->duration;
        }
        public function getDirector(){
            return $this->director;
        }

        //SETTERS
        public function setName($name) {
            $this->name = $name;
        }
        public function setDuration($Duration) {
            $this->name = $Duration;
        }
        public function setDirector($director) {
            $this->name = $director;
        }
    }