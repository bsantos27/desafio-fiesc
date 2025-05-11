<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Aula::class, function (Faker $faker) {
    return [
        'nome' => $faker->sentence,  // Adicionando o nome da aula com o Faker
        'descricao' => $faker->paragraph,
        'professor_id' => \App\Models\Professor::inRandomOrder()->first()->id, // Ajuste conforme necessário
        'aluno_id' => \App\Models\Aluno::inRandomOrder()->first()->id, // Ajuste conforme necessário
        'data_inicio' => now(),
        'data_fim' => now()->addHour(),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
