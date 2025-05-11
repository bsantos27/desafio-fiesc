<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    public function run()
    {
        Aluno::create([
            'nome' => 'João da Silva',
            'cpf' => '123.456.789-00',
            'data_nascimento' => '2000-01-01',
            'cep' => '40000000',
            'logradouro' => 'Rua A',
            'numero' => '100',
            'bairro' => 'Bairro A',
            'estado' => 'BA',
            'cidade' => 'Salvador',
            'telefone' => '123456789',
            'whatsapp' => '987654321',
            'email' => 'joao@email.com',
        ]);

        Aluno::create([
            'nome' => 'Maria Oliveira',
            'cpf' => '987.654.321-00',
            'data_nascimento' => '1998-05-15',
            'cep' => '40000001',
            'logradouro' => 'Rua B',
            'numero' => '200',
            'bairro' => 'Bairro B',
            'estado' => 'BA',
            'cidade' => 'Salvador',
            'telefone' => '234567890',
            'whatsapp' => '876543210',
            'email' => 'maria@email.com',
        ]);
    }
}
