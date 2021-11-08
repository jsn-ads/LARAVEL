<?php

namespace App\Http\Controllers;

use App\Mail\NotificacaoTarefa;
use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TarefaController extends Controller
{

    public function __construct(Tarefa $tarefa , NotificacaoTarefa $notificacaoTarefa)
    {
        $this->dados = array();
        $this->tarefa = $tarefa;                 //injeção Model tarefa
        $this->notificacao = $notificacaoTarefa;   //injeção Mail Notificação de email
    }

    public function index(Request $resquest)
    {

        return view('tarefa.index',[
            'request' => $resquest,
            'tarefas' => $this->tarefa::where('id_user',auth()->user()->id)->get()
        ]);
    }


    public function create()
    {
        return view('tarefa.create');
    }


    public function store(Request $request)
    {
        //recupera email do usuario logado
        $user_email = auth()->user()->email;

        //valida a requisição
        $request->validate($this->tarefa->rules(), $this->tarefa->feedback());

        //trata os dados para persistencia
        $this->dados['id_user'] = auth()->user()->id;
        $this->dados['tarefa']         = utf8_decode(ucfirst(strtolower($request->input('tarefa'))));
        $this->dados['data_conclusao'] = $request->input('data_conclusao');
        $this->dados = $this->tarefa::create($this->dados);

        //enviar o objeto da tarefa criada para classe notificaço tarefa
        Mail::to($user_email)->send(new NotificacaoTarefa($this->dados));

        return redirect()->route('tarefa.show',['tarefa'=>$this->dados]);

    }


    public function show(Tarefa $tarefa)
    {
        return view('tarefa.show',['tarefa'=> $tarefa]);
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
