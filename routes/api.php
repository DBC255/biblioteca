<?php

use App\Http\Controllers\AutoresController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/autor', [AutoresController::class, 'save']);
Route::get('/autor', [AutoresController::class, 'index']);
Route::get('/autor/find/{id}', [AutoresController::class, 'show']);
Route::put('/autor', [AutoresController::class, 'update']);
Route::delete('/autor/delete/{id}', [AutoresController::class, 'delete']);

Route::post('/livro', [LivroController::class, 'save']);
Route::get('/livro', [LivroController::class, 'index']);
Route::get('/livro/find/{id}', [LivroController::class, 'show']);
Route::put('/livro', [LivroController::class, 'update']);
Route::delete('/livro/delete/{id}', [LivroController::class, 'delete']);

Route::post('/usuario', [UsuarioController::class, 'save']);
Route::get('/usuario', [UsuarioController::class, 'index']);
Route::get('/usuario/find/{id}', [UsuarioController::class, 'show']);
Route::put('/usuario', [UsuarioController::class, 'update']);
Route::delete('/usuario/delete/{id}', [UsuarioController::class, 'delete']);


Route::post('/emprestimo', [EmprestimoController::class, 'save']);
Route::get('/emprestimo', [EmprestimoController::class, 'index']);
Route::get('/emprestimo/find/{id}', [EmprestimoController::class, 'show']);
Route::put('/emprestimo', [EmprestimoController::class, 'update']);
Route::delete('/emprestimo/delete/{id}', [EmprestimoController::class, 'delete']);





