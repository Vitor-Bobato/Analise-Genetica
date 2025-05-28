<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExameController;

// Tela de boas-vindas
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Tela de cadastro de exame
Route::get('/exames/novo', [ExameController::class, 'create'])->name('exames.create');
Route::post('/exames', [ExameController::class, 'store'])->name('exames.store');

// Tela de listagem de exames
Route::get('/exames', [ExameController::class, 'index'])->name('exames.index');