<?php

use App\Http\Controllers\TarefaController;
use App\Mail\MensagemMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
    return view('welcome');
});

//Paramentro de verificação de email
Auth::routes(['verify' => true]);

Route::middleware(['verified','auth'])->get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['verified','auth'])->resource('tarefa', TarefaController::class);

Route::get('mensagem_email', function(){
    return new MensagemMail();
    // Mail::to('jsn.ads@gmail.com')->send(new MensagemMail());
    // return "Mensagem Enviada com Sucesso";
});
