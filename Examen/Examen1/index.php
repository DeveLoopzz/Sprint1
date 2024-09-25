<?php

require 'champion.php';

$arrayChamps= [];


//Usar from para acceder al valor del enum y no tener que utilizar el STRING completo, mejor legibilidad en el codigo

$champion1 = new Champion("ashe",  Rol::from(0), Dificultad::FACIL, "pasive1", "skill1", "skill2", "skill3", "ultimate");
$champion2 = new Champion("Viktor",  Rol::MAGO, Dificultad::MEDIA, "pasive1", "skill1", "skill2", "skill3", "ultimate");
$champion3 = new Champion("Cassiopea",  Rol::MAGO, Dificultad::DIFICIL, "pasive1", "skill1", "skill2", "skill3", "ultimate");
$champion4 = new Champion("Sylas",  Rol::from(1), Dificultad::MEDIA, "pasive1", "skill1", "skill2", "skill3", "ultimate");
$champion5 = new Champion("Zeri",  Rol::ADC, Dificultad::DIFICIL, "pasive1", "skill1", "skill2", "skill3", "ultimate");

array_push($arrayChamps, $champion1, $champion2, $champion3, $champion4, $champion5);

echo mediumDiffMages($arrayChamps);

function mediumDiffMages(array $arrayChamps) {
    $mediumMages = " ";
    foreach($arrayChamps as $champ){
        //var_dump($champ);
        if($champ->getRole() === Rol::MAGO & $champ->getDificultad() === Dificultad::MEDIA){
            $mediumMages .= $champ->getNombre() . ", ";
        }
    }
    return $mediumMages;
}