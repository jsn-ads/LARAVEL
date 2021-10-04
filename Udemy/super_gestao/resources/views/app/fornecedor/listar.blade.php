@extends('app.template.basic')

@section('title','Fornecedor - Listar')

@section('conteudo')
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Fornecedor - Lista</p>
        </div>

        @component('app.template.parcials.menuapp')

        @endcomponent

        <div class="informacao-pagina">
            <div style="width:90%;margin-left: auto;margin-right: auto;">
                <div style="color: green">{{$msg ?? ''}}</div>
                <table border="1px solid" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Site</th>
                            <th>UF</th>
                            <th>E-mail</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fornecedores as $fornecedor)
                            <tr>
                                <td>{{$fornecedor->nome}}</td>
                                <td>{{$fornecedor->site}}</td>
                                <td>{{$fornecedor->uf}}</td>
                                <td>{{$fornecedor->email}}</td>
                                <td><a href="{{ route('app.fornecedor.editar', $fornecedor->id)}}">Editar</a></td>
                                {{-- <td><a href="{{route('')}}">Excluir</a></td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$fornecedores->appends($request)->links('pagination::bootstrap-4')}}
            <br><br>
            Total de Registros : {{$fornecedores->total()}}
        </div>
    </div>
@endsection
