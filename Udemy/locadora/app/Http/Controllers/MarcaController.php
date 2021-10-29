<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{

    public function __construct(Marca $marca)
    {
        $this->marca = $marca;
    }

    public function index(Request $request)
    {
        return $this->marca->all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->marca->nome =   $request->input('nome');
        $this->marca->imagem = $request->input('imagem');
        return $this->marca->save();
    }

    public function show($id)
    {
        return ($this->marca->find($id) != null) ? $this->marca->find($id) : ['erro'=>'Marca não encontrada'];
    }

    public function edit(Marca $marca)
    {

    }

    public function update(Request $request, $id)
    {
        return ($this->marca->find($id) != null) ? $this->marca->find($id)->update($request->all()) : ['erro'=>'Erro ao Atualizar , Marca não encontrada'];
    }

    public function destroy($id)
    {
        return ($this->marca->find($id) != null) ? $this->marca->find($id)->delete() : ['erro'=>'Erro ao Deletar , Marca não encontrada'];
    }
}
