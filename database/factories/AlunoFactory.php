<?php

namespace Database\Factories;

use App\Models\Aluno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlunoFactory extends Factory
{
    protected $model = Aluno::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'cpf' => $this->faker->unique()->numerify('###########'),
            'data_nascimento' => $this->faker->date('Y-m-d', 'now'),
            'cep' => $this->faker->numerify('########'), // CEP com 8 dígitos
            'logradouro' => $this->faker->streetAddress,
            'bairro' => $this->faker->city,
            'cidade' => $this->faker->city,
            'estado' => $this->faker->state,
            'telefone' => $this->faker->phoneNumber, // Adiciona o telefone fictício
            'whatsapp' => $this->faker->phoneNumber,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
