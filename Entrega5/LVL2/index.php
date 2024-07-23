<?php

require 'pokerDice.php';

$arrayDice = [];
$dice1 = new pokerDice;
$dice2 = new pokerDice;
$dice3 = new pokerDice;
$dice4 = new pokerDice;
$dice5 = new pokerDice;

array_push($arrayDice, $dice1, $dice2, $dice3, $dice4, $dice5);

throw5Dices($arrayDice);
foreach($arrayDice as $dice){
    echo "<pre>";
    echo $dice->shapeName();
    echo "</pre>";
}

echo "<pre> <br>";
echo $arrayDice[0]->getTotalThrows();
echo "</pre> <br>";

throw5Dices($arrayDice);
foreach($arrayDice as $dice){
    echo "<pre>";
    echo $dice->shapeName();
    echo "</pre>";
}

echo "<pre> <br>";
echo $arrayDice[0]->getTotalThrows();
echo "</pre> <br>";

    function throw5Dices($arrayDice) {
        foreach($arrayDice as $dice){
            $dice->throw();
        }
}