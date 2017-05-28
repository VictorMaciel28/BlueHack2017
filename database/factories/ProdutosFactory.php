<?php


$factory->define(App\Produtos::class, function (Faker\Generator $faker) {

    return [
        'descricao' => $faker->text(),
        'nome' => $faker->name(),
        'sexo_alvo' => $faker->randomElement(['masculino', 'feminino', 'unisex']),
        'imagem' => $faker->imageUrl(640, 480),
        'idadeMin' => rand(1,3),
        'idadeMax' => rand(3,5),
        'tipo' => rand(0, 1)
    ];
});
