<?php
// $array1= [] ;
// $array2 = [];
$array1 = [1,2,3,4,5,6];
$array2 = [2,4,6,8,10] ;


print_r($array1);
echo "<br>";
print_r($array2);
echo "<br>";

$interseccion = array_intersect($array1,$array2);
print_r($interseccion);
echo "<br>";
$arrayMerged = array_merge($array1,$array2);
$uniqueArray = array_unique($arrayMerged);
print_r($uniqueArray);
echo "<br>";