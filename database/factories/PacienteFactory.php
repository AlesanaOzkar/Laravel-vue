<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Paciente;
use Faker\Generator as Faker;

$factory->define(Paciente::class, function (Faker $faker) {

    $genero =  rand(1,2);

    return [
        'codigo' => "PT" . $faker->unique->ean8,
        'user_id' => rand(1,50),
        'nombre' => ($genero == 1) ? $faker->firstNameFemale : $faker->firstNameMale,
        'genero' => ($genero == 1)  ? 'Masculino' : 'Femenino',
        'apellido_paterno' => $faker->lastName,
        'apellido_materno' => $faker->lastName,
        'telefono_celular' => $faker->ean8,
        'telefono_fijo' => $faker->ean8,
        'notas' => $faker->realText,
        'fecha_nacimiento' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'email' => $faker->unique->email
 
    ];
});
