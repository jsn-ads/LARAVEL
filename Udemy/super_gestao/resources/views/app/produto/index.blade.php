@extends('app.template.basic')

@section('title','Produto - Listar')

@section('conteudo')
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Produto - Lista</p>
        </div>

        @component('app.template.parcials.menuproduto')

        @endcomponent

        @if ($produtos)

        <div class="informacao-pagina">
            <div style="width:90%;margin-left: auto;margin-right: auto;">
                <div style="color: green">{{$msg ?? ''}}</div>

                <table border="1px solid" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Peso</th>
                            <th>unidade</th>
                            <th>Status</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{$produto->nome}}</td>
                                <td>{{$produto->descricao}}</td>
                                <td>{{$produto->peso}}</td>
                                <td>{{$produto->id_unidade}}</td>
                                <td><a href="{{ route('produto.show', $produto->id)}}">Visualizar</a></td>
                                <td><a href="{{ route('produto.edit', $produto->id)}}">Editar</a></td>
                                <td><a href="{{ route('produto.destroy', $produto->id)}}" onclick=" return confirm('deseja deletar esse registro')">Excluir</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$produtos->appends($request)->links('pagination::bootstrap-4')}}
            <br><br>
            Exibindo {{$produtos->count()}} Produtos de {{$produtos->total()}} ({{$produtos->firstItem()}} a {{$produtos->lastItem()}})
        </div>

        @else
            <div style="width:90%;margin-left: auto;margin-right: auto;">
                <div style="color: green">Não Possui Produtos</div>
            </div>
        @endif
    </div>
@endsection
