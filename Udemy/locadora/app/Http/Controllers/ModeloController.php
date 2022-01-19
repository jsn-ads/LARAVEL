<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ModeloController extends Controller
{

    public function __construct(Modelo $modelo)
    {
        $this->dados = array();
        $this->modelo = $modelo;
    }

    public function index(Request $request)
    {
        return response()->json($this->modelo->with('marca')->get(),200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $request->validate($this->modelo->rules(), $this->modelo->feedback());

        $this->modelo->id_marca     =  $request->input('id_marca');
        $this->modelo->nome         =  $request->input('nome');
        $this->modelo->imagem       =  $request->file('imagem');
        $this->modelo->imagem       =  $this->modelo->imagem->store('imagens/modelo','public');
        $this->modelo->np           =  $request->input('np');
        $this->modelo->lugares      =  $request->input('lugares');
        $this->modelo->air_bag      =  $request->input('air_bag');
        $this->modelo->abs          =  $request->input('abs');

        return response()->json($this->modelo->save(),200);

    }

    public function show($id)
    {
        return ($this->modelo->find($id) != null) ? response()->json($this->modelo->with('marca')->find($id),200) : response()->json(['erro' => 'Modelo não encontrado'], 404);
    }

    public function edit(Modelo $modelo)
    {

    }

    public function update(Request $request, $id)
    {

        $request->validate($this->modelo->rules(), $this->modelo->feedback());
        $this->dados['id_marca'] =  $request->input('id_marca');
        $this->modelo->nome      =  $request->input('nome');
        $imagem  =  $request->file('imagem');
        $this->dados['imagem']   =  $imagem->store('imagens/modelo','public');
        $this->dados['np']       =  $request->input('np');
        $this->dados['lugares']  =  $request->input('lugares');
        $this->dados['air_bag']  =  $request->input('air_bag');
        $this->dados['abs']      =  $request->input('abs');

        if($request->file('imagem')){

            $this->modelo = $this->modelo->find($id);

            Storage::disk('public')->delete($this->modelo->imagem);
        }

        return response()->json($this->modelo->find($id)->update($this->dados),200);

    }

    public function destroy($id)
    {

        if($this->modelo->find($id)){

            $this->modelo = $this->modelo->find($id);

            Storage::disk('public')->delete($this->modelo->imagem);

        }

        return ($this->modelo->find($id) != null) ? response()->json($this->modelo->find($id)->delete(),200) : response()->json(['erro'=>'Erro ao Deletar , Modelo não encontrado'],404);
    }
}
