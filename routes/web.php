<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\AulaController;
use App\Http\Controllers\EnderecoController;

// Rotas para o recurso de alunos
Route::resource('alunos', AlunoController::class);

// Rotas para o recurso de professores
Route::resource('professores', ProfessorController::class);

// Rotas para o recurso de aulas (já com CRUD completo)
Route::resource('aulas', AulaController::class);


Route::get('/buscar-endereco/{cep}', [EnderecoController::class, 'buscar']);

Route::get('/', function () {
    return 'Olá, bem-vindo ao sistema de agendamento de aulas!';
});
