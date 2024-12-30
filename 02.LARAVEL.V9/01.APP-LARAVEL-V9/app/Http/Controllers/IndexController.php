<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $nome = "Neto";
        $idade = 35;

        $data = [
            "usuario" => $nome,
            "idade" => $idade
        ];

        return view('index', $data);
    }
}
