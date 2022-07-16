<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\UserDomicilio;

$factory->define(App\UserDomicilio::class, function ($faker) {
    return [
        'domicilio' => $faker->streetAddress,
        'numero_exterior' => $faker->buildingNumber,
        'colonia' => $faker->streetName,
        'cp' => $faker->postcode,
        'ciudad' => $faker->city,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        } 
    ];
});
