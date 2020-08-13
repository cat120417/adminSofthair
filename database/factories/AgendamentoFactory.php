<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Agendamento;
use Faker\Generator as Faker;

$factory->define(Agendamento::class, function (Faker $faker) {

    return [
        'inicio_servico' => $faker->word,
        'final_servico' => $faker->word,
        'comentario' => $faker->word,
        'cliente_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
