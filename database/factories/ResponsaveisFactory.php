<?php


$factory->define(App\Responsaveis::class, function (Faker\Generator $faker) {

    return [
        'nome' => $faker->name,
        'email' => $faker->email,
        'senha' => $faker->password,
        'estado' => $faker->state(),
        'cidade' => $faker->city(),
        'sexo' => $faker->randomElement(['M', 'F']),
        'bairro' => $faker->state
    ];
});
