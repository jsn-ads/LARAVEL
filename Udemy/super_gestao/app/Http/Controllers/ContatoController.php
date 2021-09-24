<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index(){
        return view('site.contato.index');
    }

    //funcao para adicionar contato
    public function add(Request $request){

        //metodo validação
        $request->validate([
            'nome'              => 'required|min:3|max:40',
            'telefone'          => 'required|max:14',
            'email'             => 'required|max:100',
            'motivo_contato'    => 'required',
            'mensagem'          => 'required|max:250'
        ]);

        Contato::create($request->all());

        return redirect()->route('contato');
    }
}
