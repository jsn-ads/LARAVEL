<?php


use App\Http\Controllers\CMS\HomeController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\UserController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Facade;

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

Auth::routes();

//Rota do Sistema

//Rota inicial e Login
Route::prefix('/')->group(function(){

    Route::get('/', [HomeController::class,'index'])->name('home');

    Route::get('login',     [LoginController::class, 'index'])->name('login');
    Route::post('login',    [LoginController::class, 'authenticate']);
    Route::post('logout',   [LoginController::class, 'logout'])->name('logout');

    Route::get('register',  [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);

});


//Rota do Painel de Controle
Route::prefix('/painel')->group(function(){
    
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class,'index'])->name('painel');
    Route::resource('users', UserController::class);
    
});






