<?php

use App\Spend;
use Faker\Generator as Faker;

$factory->define(Spend::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->text,
        'price' => $faker->numberBetween(5,2500), //dépense entre 1 et 2500
        'pay_date' => $faker->DateTime,
        'level' => $faker->randomElement(array ('accompt','paid'))
    ];
});
