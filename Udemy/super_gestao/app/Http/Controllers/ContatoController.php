<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function index(){

        $motivo_contatos = MotivoContato::all();

        return view('site.contato.index',
            [
                'motivo_contatos' => $motivo_contatos
            ]
        );
    }

    //funcao para adicionar contato
    public function add(Request $request){

        //metodo validação
        $request->validate([
            'nome'              => 'required|min:3|max:40',
            'telefone'          => 'required|max:14',
            'email'             => 'required|max:100|email',
            'id_motivo_contatos'=> 'required',
            'mensagem'          => 'required|max:250'
        ]);

        Contato::create($request->all());

        return redirect()->route('contato');
    }
}
