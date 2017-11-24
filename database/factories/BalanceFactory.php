<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
   
   return [
		'pricePart' => $faker->numberBetween(7, 2),
		'priceStay' => $faker->numberBetween(7, 2),  
		'priceDebit' => $faker->numberBetween(7, 2),
		'priceCredit' => $faker->numberBetween(7, 2), 
    ];
});
