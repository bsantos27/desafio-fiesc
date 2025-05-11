<?php

namespace Database\Factories;

use App\Models\Professor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfessorFactory extends Factory
{
    protected $model = Professor::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name, // Gera um nome fictício para o professor
            'email' => $this->faker->unique()->safeEmail, // Gera um e-mail fictício    
            'cpf' => $this->faker->unique()->numerify('###########'), // Gera um CPF fictício
            'data_nascimento' => $this->faker->date('Y-m-d', 'now'), // Gera uma data de nascimento fictícia
            'especialidade' => $this->faker->randomElement(['Matemática', 'Português', 'Inglês', 'História', 'Geografia']), // Gera uma especialidade fictícia
            'status' => $this->faker->randomElement(['ativo', 'inativo']), // Gera um status fictício
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
