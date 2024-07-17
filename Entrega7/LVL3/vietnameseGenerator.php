<?php

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('vi_VN');

echo generateVietnamese($faker);

function generateVietnamese(Faker\Generator $faker) {
   return "Name: " . $faker->name . "<br> City: " . $faker->city() . "<br> email: " .
          $faker->email . "<br> Phone: " . $faker->phoneNumber();
}
