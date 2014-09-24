<?php
require_once __DIR__.'/Faker/src/autoload.php';
// echo __DIR__ ;
$faker = Faker\Factory::create();

// view readme from https://github.com/fzaninotto/Faker 
$firstN = $faker->firstName;
$lastN = $faker->lastName;
echo $firstN." ";
echo $lastN;
?>