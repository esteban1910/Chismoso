<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'centro_universitario_id' => $faker->numberBetween(1, 2),
        'nombre' => $faker->name,
        'correo' => $faker->unique()->safeEmail,
        'codigo' => $faker->randomNumber(),
        'fecha_nacimiento' => $faker->date(),
    ];
});
