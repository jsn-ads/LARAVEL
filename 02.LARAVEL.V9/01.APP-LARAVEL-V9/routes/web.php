<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);

Route::get('/users/{qtd}', [UserController::class, 'amount']);
