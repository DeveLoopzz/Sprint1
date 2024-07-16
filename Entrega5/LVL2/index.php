<?php

require 'pokerDice.php';

$arrayDice = [];

$arrayDice = throw5Dices($arrayDice);

foreach($arrayDice as $dice){
    echo "<pre>";
    echo $dice->shapeName();
    echo "</pre>";
}

echo $arrayDice[0]->getTotalThrows();

array_splice($arrayDice, 0);

$arrayDice = throw5Dices($arrayDice);
foreach($arrayDice as $dice){
    echo "<pre>";
    echo $dice->shapeName();
    echo "</pre>";
}

echo $arrayDice[0]->getTotalThrows();


    function throw5Dices($arrayDice): array {
        for($i = 1; $i <= 5; $i++) {
            $dice = new pokerDice;
            $dice->throw();
            $arrayDice[] = $dice;
        }
        return $arrayDice;
}