<?php

use App\Http\Controllers\FuncionariosController;
use App\Models\Funcionario;
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

Route::prefix('funcionarios')->group( function() {
    Route::get('/', [FuncionariosController::class, 'index'])->name('funcionarios-index');

    Route::get('/create', [FuncionariosController::class, 'create'])->name('funcionarios-create');

    Route::post('/', [FuncionariosController::class, 'store'])->name('funcionarios-store');

    Route::get('/{id}/edit', [FuncionariosController::class, 'edit'])->where('id', '[0-9]+')->name('funcionarios-edit');

    Route::put('/{id}', [FuncionariosController::class, 'update'])->where('id', '[0-9]+')->name('funcionarios-update');

    Route::delete('/{id}', [FuncionariosController::class, 'destroy'])->where('id', '[0-9]+')->name('funcionarios-destroy');


});