<?php 

namespace MonsterHunter;

require 'Monster.php';
require 'notasdelcazador.php';


$hunterNotes = new huntersNotes();
$arrayMonsters = [];

$monster1 = new Monstruo("Rathalos", locationM::from(0), tipoM::VOLADOR,rank::from(0), rank::from(1), rank::from(2),rank::from(1),rank::from(3));
$monster2 = new Monstruo("Odogaron ébano", locationM::from(2), tipoM::COLMILLOS, rank::from(2), rank::from(3), rank::from(2),rank::from(2),rank::from(1));
$monster3 = new Monstruo("Diablos", locationM::from(1), tipoM::VOLADOR, rank::from(0), rank::from(2), rank::from(1),rank::from(3),rank::from(2));
$monster4 = new Monstruo("Nergigante", locationM::from(4), tipoM::DRAGON_ANCIANO, rank::from(1), rank::from(1), rank::from(3),rank::from(1),rank::from(2));
$monster5 = new Monstruo("Lunastra", locationM::from(4), tipoM::DRAGON_ANCIANO, rank::from(0), rank::from(1), rank::from(1),rank::from(3),rank::from(2));

array_push($arrayMonsters, $monster2, $monster3, $monster4, $monster5);
$hunterNotes->register($monster1);
$hunterNotes->registerMany($arrayMonsters);


print_r($hunterNotes->searchType(tipoM::DRAGON_ANCIANO));

echo "<br>";
echo $hunterNotes->longestName();
echo "<br>";


echo $hunterNotes->findMonster("Rathalos");

var_dump($hunterNotes-> showWeakness("Rathalos")); 
