<?php

use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\DepartamentoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// ROTAS PARA VIEWS DE FUNCIONÁRIO
Route::get('funcionarios/index', [FuncionarioController::class,'index'])->name ('funcionarios.index');
Route::get('funcionarios/create', [FuncionarioController::class,'create'])->name ('funcionarios.create');   
Route::post('/funcionarios', [FuncionarioController::class,'store'])->name ('funcionarios.store');   
Route::get('/funcionarios/edit/{id}', [FuncionarioController::class,'edit'])->name ('funcionarios.edit');   //Formulário de edição
Route::put('/funcionarios/{id}', [FuncionarioController::class,'update'])->name ('funcionarios.update');  //Rota para atualização do registro no banco 
Route::delete('/funcionarios{id}', [FuncionarioController::class,'destroy'])->name ('funcionarios.destroy');   //Rota para remoção de registro no banco

Route::get('cargos/index', [CargoController::class,'index'])->name ('cargos.index'); 
Route::get('cargos/create', [CargoController::class,'create'])->name ('cargos.create'); 
Route::post('/cargos', [CargoController::class,'store'])->name ('cargos.store'); 

Route::get('departamentos/index', [DepartamentoController::class,'index'])->name ('departamentos.index'); 
Route::get('departamentos/create', [DepartamentoController::class,'create'])->name ('departamentos.create'); 
Route::post('/departamentos', [DepartamentoController::class,'store'])->name ('departamentos.store'); 