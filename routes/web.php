<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});



Route::get('/usuarios', [UsuariosController::class, 'index']);
Route::get('/usuarios/cadastro', [UsuariosController::class, 'cadastro']);
Route::get('/usuarios/cadastro/{id}', [UsuariosController::class, 'cadastro']);
Route::post('/usuarios/salvar', [UsuariosController::class, 'salvar']);
Route::get('/usuarios/remover/{id}', [UsuariosController::class, 'remover']);






use App\Http\Controllers\LivrosController;



Route::get('/livros', [LivrosController::class, 'index']);
Route::get('/livros/cadastro', [LivrosController::class, 'cadastro']);
Route::get('/livros/cadastro/{id}', [LivrosController::class, 'cadastro']);
Route::post('/livros/salvar', [LivrosController::class, 'salvar']);
Route::get('/livros/remover/{id}', [LivrosController::class, 'remover']);





use App\Http\Controllers\EmprestimosController;



Route::get('/emprestimos', [EmprestimosController::class, 'index']);
Route::get('/emprestimos/cadastro', [EmprestimosController::class, 'cadastro']);
Route::get('/emprestimos/cadastro/{id}', [EmprestimosController::class, 'cadastro']);
Route::post('/emprestimos/salvar', [EmprestimosController::class, 'salvar']);
Route::get('/emprestimos/remover/{id}', [EmprestimosController::class, 'remover']);





use App\Http\Controllers\AutoresController;



Route::get('/autores', [AutoresController::class, 'index']);
Route::get('/autores/cadastro', [AutoresController::class, 'cadastro']);
Route::get('/autores/cadastro/{id}', [AutoresController::class, 'cadastro']);
Route::post('/autores/salvar', [AutoresController::class, 'salvar']);
Route::get('/autores/remover/{id}', [AutoresController::class, 'remover']);

