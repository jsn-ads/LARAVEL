<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ping', function(Request $request){
    return ['pong'=>true];
});

//listar
Route::get('/notes', '');

//edit
Route::get('/note/{id}', '');

//adicionar
Route::post('/note', '');

//atualizar edit
Route::put('/note/{id}', '');

//deletar
Route::delete('/note/{id}','');




