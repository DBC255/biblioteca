<?php

use App\Http\Controllers\AutoresController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/autor', [AutoresController::class, 'save']);
Route::get('autor', [AutoresController::class, 'index']);

Route::post('/livro', [LivroController::class, 'save']);
Route::get('livro', [LivroController::class, 'index']);

Route::post('/usuario', [UsuarioController::class, 'save']);
Route::get('/usuario', [UsuarioController::class, 'index']);

Route::post('/emprestimo', [EmprestimoController::class, 'save']);
Route::get('/emprestimo', [EmprestimoController::class, 'index']);

