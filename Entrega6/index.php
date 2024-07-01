<?php

require 'Exercise1.php';

$cat1 = new Cat("Misifu");
$dog1 = new Dog("Firulais");

echo  $cat1->makeSound() ."<br>";
echo $dog1->makeSound() . "<br>";