<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;

class MarcaController extends Controller
{

    public function __construct(Marca $marca)
    {
        $this->marca = $marca;
    }

    public function index(Request $request)
    {
        return response($this->marca->all(),200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $regras = [
            'nome'    => 'required|unique:marcas',
            'imagem'  => 'required'
        ];

        $feedbeck = [
            'required'    => 'o campo :attribute e obrigatório',
            'nome.unique' => 'este nome ja esta sendo utilizado'
        ];

        $request->validate($regras,$feedbeck);

        $this->marca->nome   = ucwords(strtolower($request->input('nome')));
        $this->marca->imagem = ucwords(strtolower($request->input('imagem')));

        return response($this->marca->save(),200);
    }

    public function show($id)
    {
        return ($this->marca->find($id) != null) ? response($this->marca->find($id),200) : response(['erro'=>'Marca não encontrada'],404);
    }

    public function edit(Marca $marca)
    {

    }

    public function update(Request $request, $id)
    {
        return ($this->marca->find($id) != null) ? response($this->marca->find($id)->update($request->all()),200) : response(['erro'=>'Erro ao Atualizar , Marca não encontrada'],404);
    }

    public function destroy($id)
    {
        return ($this->marca->find($id) != null) ? response($this->marca->find($id)->delete(),200) : response(['erro'=>'Erro ao Deletar , Marca não encontrada'],404);
    }
}
