<?php 

$X = array (10, 20, 30, 40, 50, 60);

//MOSTREM PER PANTALLA EL TAMANY DEL ARRAY
echo count($X) . "<br>";

//ELIMINEM UN ELEMENT DEL ARRAY
unset($X[5]);

//REINDEXEM L'ARRAY
$X = array_values($X);

echo count($X). "<br>";

//DEMOSTRACIO DELS INDEX
print_r($X);