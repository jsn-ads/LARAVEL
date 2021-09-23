<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index(){
        return view('site.contato.index');
    }

    public function add(Request $request){

        $contato = new Contato();
        $contato->fill($request->all());
        $contato->save();

        return view('site.contato.index');
    }
}
