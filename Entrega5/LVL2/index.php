<?php

require 'pokerDice.php';

$arrayDice = [];

for($i = 0; $i < 5; $i++) {
    $dice1 = new pokerDice;
    $arrayDice[] = $dice1;
}

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