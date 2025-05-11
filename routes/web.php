<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\AulaController;

// Rotas para o recurso de alunos
Route::resource('alunos', AlunoController::class);

// Rotas para o recurso de professores
Route::resource('professores', ProfessorController::class);

// Rotas para o recurso de aulas (já com CRUD completo)
Route::resource('aulas', AulaController::class);


Route::get('/', function () {
    return 'Olá, bem-vindo ao sistema de agendamento de aulas!';
});
