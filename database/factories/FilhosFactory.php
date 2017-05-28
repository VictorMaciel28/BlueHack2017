nome


<?php


$factory->define(App\Filhos::class, function (Faker\Generator $faker) {

    return [
        'nome' => $faker->name,
        'sexo' => $faker->randomElement(['M', 'F']),
        'data_nascimento' => $faker->dateTimeBetween('-90 years', 'now'),
    	"altura"=> $faker->randomFloat(2, 0.30, 2),
    	"peso"=>rand(0, 400),
    	"tamanho_pe"=>rand(0, 60),
    	"tamanho_fralda"=>$faker->randomElement(['RN', "GG", 'P', 'PP', 'M']),
    	"tamanho_roupa"=>$faker->randomElement(['RN', "GG", 'P', 'PP', 'M'])
    ];
});
