<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;

class MarcaController extends Controller
{

    public function __construct(Marca $marca)
    {
        $this->dados = array();
        $this->marca = $marca;
        $this->a = $marca;
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

        $request->validate($this->marca->rules(),$this->marca->feedback());

        $this->marca->nome   = utf8_encode(ucwords(strtolower($request->input('nome'))));
        //recupera a imagem
        $this->marca->imagem = $request->file('imagem');
        //salva imagem dentro de storage
        $this->marca->imagem = $this->marca->imagem->store('imagens/marca','public');

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

        if($this->marca->find($id) === null){
            return response(['erro'=>'Erro ao Atualizar , Marca não encontrada'],404);
        }

        if($request->method() === 'PATCH'){

            $regrasDinamicas = array();

            foreach($this->marca->rules() as $input => $regra){

                if(array_key_exists($input, $request->all())){

                    $regrasDinamicas[$input] = $regra;

                }
            }

            $request->validate($regrasDinamicas, $this->marca->find($id)->feedback());

            $this->dados = $request->all();

        }else{

            $this->dados['nome'] = utf8_encode(ucwords(strtolower($request->input('nome'))));

            $imagem = $request->file('imagem');

            $this->dados['imagem'] = $imagem->store('imagens/marca','public');

            $request->validate($this->marca->find($id)->rules(), $this->marca->find($id)->feedback());

        }

        if($request->file('imagem')){

            $this->marca = $this->marca->find($id);

            Storage::disk('public')->delete($this->marca->imagem);
        }


        return response($this->marca->find($id)->update($this->dados),200);

    }

    public function destroy($id)
    {

        if($this->marca->find($id)){

            $this->marca = $this->marca->find($id);

            Storage::disk('public')->delete($this->marca->imagem);

        }

        return ($this->marca->find($id) != null) ? response($this->marca->find($id)->delete(),200) : response(['erro'=>'Erro ao Deletar , Marca não encontrada'],404);
    }
}
