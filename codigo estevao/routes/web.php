<?php

use Illuminate\Support\Facades\Route;

// Rota para a primeira view
Route::get('/', function () {
    $nome = "Estevao";
    return view('welcome', ['nome' => $nome]); // Acesso na raiz
});

// Rota para a view problema1
Route::get('/problema1', function () {
    return view('problema1'); // Acesso na raiz
});

// Rota para a view produtos
Route::get('/produtos', function () {
    return view('products'); // Acesso na raiz
});

// Rota para a view contatos
Route::get('/contatos', function () {
    return view('contacts'); // Acesso na raiz
});

// Importa o controlador
use App\Http\Controllers\ProbController;

// Rota para o formulário
Route::get('/formulario', [ProbController::class, 'showForm']);

// Rota para processar o formulário
Route::post('/processar', [ProbController::class, 'processForm']);


use App\Http\Controllers\CalculatorController;

Route::get('/calculator', [CalculatorController::class, 'showCalculator']);
Route::post('/calculate', [CalculatorController::class, 'calculate']);

use App\Http\Controllers\DisciplinasController;

Route::get('/disciplinas', [DisciplinasController::class, 'showForm']);
Route::post('/disciplinas', [DisciplinasController::class, 'addDiscipline']);

use App\Http\Controllers\PesquisaController;

Route::get('/formulario', [PesquisaController::class, 'showForm'])->name('formulario');
Route::post('/formulario2', [PesquisaController::class, 'processForm'])->name('formulario2');
Route::post('/resultado', [PesquisaController::class, 'showResult'])->name('resultado');

Route::get('/desafio1', [ProbController::class, 'showForm']);
