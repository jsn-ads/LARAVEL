<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Unidade;

use Illuminate\Http\Request;

class AppProdutoController extends Controller
{
    //Exibe a lista de registros [GET|HEAD]
    public function index(Request $request)
    {
        $produtos = Produto::paginate(10);

        return view('app.produto.index',
        [
            'produtos' => $produtos,
            'request'  => $request->all()
        ]);
    }

    //Exibe formulário de criação do registro [GET|HEAD]
    public function create()
    {
        $unidades = Unidade::all();

        return view('app.produto.create',[
            'unidades' => $unidades
        ]);

    }

    //Recebe formulário de criação do registro [POST]
    public function store(Request $request)
    {

        $regras = [
            'nome'          => 'required|min:3|max:40',
            'descricao'     => 'required|min:3|max:250',
            'peso'          => 'required|integer',
            'id_unidade'    => 'exists:unidades,id'
        ];

        $feed = [
            'required'          => 'o campo :attribute e obrigatório',
            'nome.min'          => 'o campo nome deve ter mais 3 caracteres',
            'nome.max'          => 'o campo nome deve ter no maximo 40 caracteres',
            'peso.integer'      => 'o campo peso e invalido',
            'id_unidade.exists' => 'o campo unidade e invalido'
        ];

        $request->validate($regras, $feed);

        Produto::create($request->all());

        return redirect()->route('produto.index');
    }

    //Exibe registro específico [GET|HEAD]
    public function show(Produto $produto)
    {
        //
    }

    //Exibe formulário de edição do resgistro [GET|HEAD]
    public function edit(Produto $produto)
    {
        //
    }

    //Recebe formulário de edição do registro [PUT|PATCH]
    public function update(Request $request, Produto $produto)
    {
        //
    }

    //Recebe dados para remoção do registro [DELETE]
    public function destroy(Produto $produto)
    {
        //
    }
}
