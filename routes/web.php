<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\pet;
use App\Http\Controllers\petController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelatorioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [petController::class,'index']);

Route::get('/Pet', [AnimalController::class,'Pet']);

Route::get('/Pet/novo', [AnimalController::class,'create']);

Route::get('/Pet/editar/{id}', [AnimalController::class,'edit']);

Route::post('/Pet/salvar', [AnimalController::class,'store']);

Route::delete('/Pet/excluir', [AnimalController::class,'destroy']);

Route::put('/Pet/alterar', [RelatorioController::class,'update']);

Route::get('/relatorio', [RelatorioController::class,'gerarRelatorio']);




