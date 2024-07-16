<?php

    require 'cinemafranchise.php';

    $movies = [];

    $franchise = new CinemaFranchise;

    $cinema1 = new Cinema("Cinesa", "Barcelona");
    $cinema2 = new Cinema("YelmoCines", "Girona");

    $franchise->addCinema($cinema1);
    $franchise->addCinema($cinema2);

    $movie1 = new Movie("Green Book", 130, "Peter Farrelly");
    $movie2 = new Movie("Gran Torino", 116, "Clint Eastwood");
    $movie3 = new Movie("Mierda", 116, "Clint Eastwood");
    $movie4 = new Movie("peli1", 130, "Sergio");
    $movie5 = new Movie("peli2", 116, "Sergio");
    $movie6 = new Movie("peli3", 116, "sergio");

    array_push($movies, $movie1, $movie2, $movie3,$movie4,$movie5,$movie6);

    foreach($movies as $movie1) {
        $cinema1->setMovie($movie1);
    }

    $cinema2->setMovie($movie4);
    $cinema2->setMovie($movie5);
    $cinema2->setMovie($movie6);

    echo "<pr>";
    echo $cinema1->movieData() . "<br><br>";
    echo $cinema2->movieData();
    //echo $franchise->searchForDirector("Clint Eastwood");
    echo "</pr>";

    $variable = ($franchise->searchForDirector("Sergio"));
    foreach($variable as $movie) {
        echo "<pr>";
        echo $movie . "<br>";
        echo "</pr>";
    }

    //print_r($cinema1);

