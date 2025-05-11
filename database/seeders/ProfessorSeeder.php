<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Professor;

class ProfessorSeeder extends Seeder
{
    public function run()
    {
        Professor::create([
            'nome' => 'Carlos Souza',
            'cpf' => '111.222.333-44',
            'data_nascimento' => '1985-02-20',
            'especialidade' => 'Matemática',
            'status' => 'ativo',
        ]);

        Professor::create([
            'nome' => 'Patrícia Lima',
            'cpf' => '555.666.777-88',
            'data_nascimento' => '1990-09-10',
            'especialidade' => 'Português',
            'status' => 'ativo',
        ]);
    }
}
