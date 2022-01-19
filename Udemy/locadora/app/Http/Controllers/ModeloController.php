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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return response()->json($this->modelo->all(),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate($this->modelo->rules(), $this->modelo->feedback());

        $this->modelo->id_marca     =  $request->input('id_marca');
        $this->modelo->imagem  =  $request->file('imagem');
        $this->modelo->imagem  =  $this->modelo->imagem->store('imagens/modelo','public');
        $this->modelo->np      =  $request->input('np');
        $this->modelo->lugares =  $request->input('lugares');
        $this->modelo->air_bag =  $request->input('air_bag');
        $this->modelo->abs     =  $request->input('abs');

        return response()->json($this->modelo->save(),200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ($this->modelo->find($id) != null) ? response()->json($this->modelo->find($id),200) : response()->json(['erro' => 'Modelo não encontrado'], 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function edit(Modelo $modelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate($this->modelo->rules(), $this->modelo->feedback());

        $this->dados['id_marca'] =  $request->input('id_marca');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelo  $modelo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($this->modelo->find($id)){

            $this->modelo = $this->modelo->find($id);

            Storage::disk('public')->delete($this->modelo->imagem);

        }

        return ($this->modelo->find($id) != null) ? response()->json($this->modelo->find($id)->delete(),200) : response()->json(['erro'=>'Erro ao Deletar , Modelo não encontrado'],404);
    }
}
