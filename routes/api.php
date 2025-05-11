<?php

use App\Http\Controllers\EnderecoController;
use Illuminate\Support\Facades\Route;

Route::get('/buscar-endereco/{cep}', [EnderecoController::class, 'buscar']);

