<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aula;
use App\Models\Aluno;
use App\Models\Professor;

class AulaSeeder extends Seeder
{
    public function run()
    {
        $aluno = Aluno::first(); // Pega o primeiro aluno
        $professor = Professor::first(); // Pega o primeiro professor

        Aula::create([
            'aluno_id' => $aluno->id,
            'professor_id' => $professor->id,
            'data_aula' => '2025-06-01 10:00:00',
            'conteudo' => 'Introdução à Matemática',
            'status' => 'agendada',
        ]);

        $professor2 = Professor::find(2); // Pega o segundo professor

        Aula::create([
            'aluno_id' => $aluno->id,
            'professor_id' => $professor2->id,
            'data_aula' => '2025-06-02 14:00:00',
            'conteudo' => 'Leitura e Interpretação de Textos',
            'status' => 'agendada',
        ]);
    }
}
