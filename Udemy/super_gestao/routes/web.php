<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreController;
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

Route::get('/',[PrincipalController::class, 'index'])->name('/');

Route::get('/sobre',[SobreController::class, 'index'])->name('sobre');

Route::get('/contato',[ContatoController::class, 'index'])->name('contato');

Route::get('/login', function(){
    echo "Login";
});

Route::get('/clientes', function(){
    echo "Clientes";
});

Route::get('/fornecedores', function(){
    echo "Fornecedores";
});

Route::get('/produtos', function(){
    echo "Produtos";
});


