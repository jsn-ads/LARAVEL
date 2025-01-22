<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, 'index']);

Route::get('/lacosrepeticoes', [IndexController::class, 'repeat_loops']);

Route::get('/componentes', [ComponentController::class, 'index']);

Route::get('/pessoas', [ComponentController::class, 'people']);

Route::get('/grupos', [ComponentController::class, 'group']);
