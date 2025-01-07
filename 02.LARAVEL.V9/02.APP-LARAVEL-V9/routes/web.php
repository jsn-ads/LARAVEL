<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [IndexController::class, 'index']);

Route::get('/lacosrepeticoes', [IndexController::class, 'repeat_loops']);
