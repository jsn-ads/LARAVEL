<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppProdutoController extends Controller
{
    public function index(){
        return view('app.produto.index');
    }
}
