@extends('adminlte::page')

@section('title','Usuários')
    
@section('css')
    <link rel="stylesheet" href="style.css">
@endsection

@section('content_header')
    <h1>
        Usuários
        <a href="{{route('users.create')}}" class="btn btn-sm btn-success">Adicionar</a>
    </h1>
@endsection

@section('content')
    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-Mail</th>
            <th>Ações</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{route('users.edit',['user'=>$user->id])}}" class="btn btn-sm btn-warning">Editar</a>
                    <a href="{{route('users.destroy',['user'=>$user->id])}}" class="btn btn-sm btn-danger">Excluir</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('js')
    <script src=""></script>
@endsection

    