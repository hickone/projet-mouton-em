<?php

use Faker\Generator as Faker;

$factory->define(App\Trip::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->text,
        'user_id' => function(){
            return factory(App\User::class)->create()->id;
        }
    ];
});
