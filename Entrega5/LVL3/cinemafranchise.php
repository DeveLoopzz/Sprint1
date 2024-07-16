<?php
    include 'cinema.php';

    class CinemaFranchise {
        private $arrayCinemas = [];

        public function __construct(){
            $this->arrayCinemas = [];
        }

        public function addCinema(Cinema $cinema) {
            $this->arrayCinemas[] = $cinema;
        }

        public function searchForDirector($director) {
            $movies = [];
            foreach($this->arrayCinemas as $cinema) {
                foreach($cinema->getArrayMovies() as $movie){
                    if(stripos($movie->getDirector(),$director) !== false){
                        $movies[] = $movie->getName();
                    }
                    }
                }
                $finalMovies = array_values(array_unique($movies));
                return $finalMovies;
            }

    }
