<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
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

Route::get('/',[PrincipalController::class, 'index'])->name('inicio');

Route::get('/sobre',[SobreController::class, 'index'])->name('sobre');

Route::get('/login', function(){
    echo "Login";
});


Route::prefix('/contato')->group(function(){
    Route::get('/', [ContatoController::class, 'index'])->name('contato');
    Route::post('/',[ContatoController::class, 'add'])->name('contato');
});


Route::prefix('/app')->group( function(){

    Route::get('/clientes', function(){ echo "Clientes";})->name('app.clientes');

    Route::get('/fornecedores', [FornecedorController::class,'index'])->name('app.fornecedores');

    Route::get('/produtos', function(){ echo "Produtos";})->name('app.produtos');

});

Route::fallback(function(){
    echo "Pagina não encontrada <a href=".route('inicio')."> clique aqui </a> para voltar a tela inicial";
});

