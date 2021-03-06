<?php 
require_once 'vendor/autoload.php';
require_once 'vendor/fzaninotto/Faker/src/autoload.php';

$faker = Faker\Factory::create('id_ID');

for ( $i= 0; $i <20; $i++) {
echo $faker->name . '<br>';
}

?>