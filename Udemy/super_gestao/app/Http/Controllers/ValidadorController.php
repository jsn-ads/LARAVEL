<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidadorController extends Controller
{
    public static function regras(){

        $regras = [
            'nome' => 'required|min:3|max:100'
        ];

        return $regras;
    }

    public static function feed(){

        $feed = [
            'required' => 'o campo :attribute e obrigatorio',
            'nome.min' => 'o campo Nome deve ter no minimo 3 caracteres',
            'nome.max' => 'o campo Nome deve ter no maximo 100 caracteres'
        ];

        return $feed;
    }
}
