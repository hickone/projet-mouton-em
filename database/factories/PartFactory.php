<?php

use App\Part;
use Faker\Generator as Faker;

$factory->define(Part::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'day' => $faker->numberBetween(1, 7),
        'started' => $faker->dateTime()
    ];
});
