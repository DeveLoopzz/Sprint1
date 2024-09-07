<?php

require 'champion.php';

$arrayChamps= [];

$champion1 = new Champion("ashe",  Rol::ADC, Dificultad::FACIL, "pasive1", "skill1", "skill2", "skill3", "ultimate");
$champion2 = new Champion("Viktor",  Rol::MAGO, Dificultad::MEDIA, "pasive1", "skill1", "skill2", "skill3", "ultimate");
$champion3 = new Champion("Cassiopea",  Rol::MAGO, Dificultad::DIFICIL, "pasive1", "skill1", "skill2", "skill3", "ultimate");
$champion4 = new Champion("Sylas",  Rol::MAGO, Dificultad::MEDIA, "pasive1", "skill1", "skill2", "skill3", "ultimate");
$champion5 = new Champion("Zeri",  Rol::ADC, Dificultad::DIFICIL, "pasive1", "skill1", "skill2", "skill3", "ultimate");

array_push($arrayChamps, $champion1, $champion2, $champion3, $champion4, $champion5);

echo mediumDiffMages($arrayChamps);

function mediumDiffMages($arrayChamps) {
    $mediumMages = " ";
    foreach($arrayChamps as $champ){
        //var_dump($champ);
        if($champ->getRole() === Rol::MAGO & $champ->getDificultad() === Dificultad::MEDIA){
            $mediumMages .= $champ->getNombre() . ", ";
        }
    }
    return $mediumMages;
}