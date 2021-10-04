<?php

use App\Http\Controllers\AppClienteController;
use App\Http\Controllers\AppFornecedorController;
use App\Http\Controllers\AppHomeController;
use App\Http\Controllers\AppProdutoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreController;

use App\Http\Middleware\LogAcessoMiddleware;

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

Route::prefix('/login')->group(function(){
    Route::get('/{valor?}', [LoginController::class, 'index'])->name('login');
    Route::post('/',[LoginController::class, 'autenticar'])->name('login');
});

Route::prefix('/contato')->group(function(){
    Route::get('/', [ContatoController::class, 'index'])->name('contato');
    Route::post('/',[ContatoController::class, 'add'])->name('contato');
});


Route::middleware('autenticacao: padrao , usuario')->prefix('/app')->group( function(){
    Route::get('/', [AppHomeController::class, 'index'])->name('app');
    Route::get('/cliente', [AppClienteController::class, 'index'])->name('app.cliente');

    Route::get('/fornecedor/', [AppFornecedorController::class,'index'])->name('app.fornecedor');
    Route::get('/fornecedor/adicionar', [AppFornecedorController::class,'adicionar'])->name('app.fornecedor.adicionar');
    Route::post('/fornecedor/add', [AppFornecedorController::class, 'add'])->name('app.fornecedor.add');
    Route::get('/fornecedor/listar/{msg?}', [AppFornecedorController::class, 'listar'])->name('app.fornecedor.listar');
    Route::get('/fornecedor/editar/{id}',[AppFornecedorController::class, 'editar'])->name('app.fornecedor.editar');

    Route::get('/produto',[AppProdutoController::class, 'index'])->name('app.produto');
    Route::get('/sair', [LoginController::class,'sair'])->name('app.sair');
});

Route::fallback(function(){
    echo "Pagina não encontrada <a href=".route('inicio')."> clique aqui </a> para voltar a tela inicial";
});

