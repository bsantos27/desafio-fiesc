<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'cpf', 'data_nascimento', 'cep', 'logradouro', 'numero', 'bairro', 
        'estado', 'cidade', 'telefone', 'whatsapp', 'email',
    ];

    public function aulas()
    {
        return $this->hasMany(Aula::class);
    }
}
