<?php

require 'animal.php';
require 'dog.php';
require 'cat.php';

$cat1 = new Cat("Misifu");
$dog1 = new Dog("Firulais");

echo $cat1->makeSound() ."<br>";
echo $dog1->makeSound() . "<br>";