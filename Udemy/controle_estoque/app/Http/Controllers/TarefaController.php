<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TarefaController extends Controller
{

    public function __construct(Tarefa $tarefa)
    {
        $this->tarefa = $tarefa;
    }

    public function index(Request $resquest)
    {

    }


    public function create()
    {
        return view('tarefa.create');
    }


    public function store(Request $request)
    {
        $request->validate($this->tarefa->rules(), $this->tarefa->feedback());

        $this->tarefa->tarefa = utf8_decode(ucfirst(strtolower($request->input('tarefa'))));
        $this->tarefa->data_conclusao = $request->input('data_conclusao');
        $tarefa = $this->tarefa->save();

        return redirect()->route('tarefa.show',['tarefa'=>$tarefa]);
    }


    public function show($id)
    {
        return view('tarefa.show',['id'=>$id]);
    }


    public function edit(Tarefa $tarefa)
    {
        //
    }


    public function update(Request $request, Tarefa $tarefa)
    {
        //
    }


    public function destroy(Tarefa $tarefa)
    {
        //
    }
}
