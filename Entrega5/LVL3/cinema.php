<?php

    include 'movie.php';

    class Cinema {
        private $name;
        private $city;
        public $arrayMovies;

        //CONSTRUCT
        public function __construct($name, $city) {
            $this->name = $name;
            $this->city = $city;
            $this->arrayMovies = [];
        }

        //GETTERS
        public function getName() {
            return $this->name;
        }
        public function getCity() {
            return $this->city;
        }
        public function getArrayMovies() {
            return $this->arrayMovies;
        }

        //SETTERS
        public function setName($name) {
            $this->name = $name;
        }
        public function setCity($city) {
            $this->name = $city;
        }
        public function setMovie(Movie $movie) {
            $this->arrayMovies[] = $movie;
        }

        //METHODS
        public function movieData() {
            $info = "";
            foreach($this->arrayMovies as $movie) {
              $info .=  "Name: " . $movie->getName() . "<br>" . "Duration: " . $movie->getDuration() . " mins" . "<br>" . "Director: " . $movie->getDirector() . "<br><br>";
            }
            return $info;
        }
    }