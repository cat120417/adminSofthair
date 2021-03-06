<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Servico;
use Faker\Generator as Faker;

$factory->define(Servico::class, function (Faker $faker) {

    return [
        'nome' => $faker->word,
        'preco' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
