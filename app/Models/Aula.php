<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Aula extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'professor_id',
        'aluno_id',
        'nome',
        'data_inicio',
        'data_fim',
        'updated_at',
        'created_at',
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
}
