@extends('adminlte::page')

@section('title','Usuários')
    
@section('css')
    <link rel="stylesheet" href="style.css">
@endsection

@section('content_header')
    <h1>
        Adicionar Usuário
    </h1>
@endsection

@section('content')
    <form action="{{route('users.store')}}" method="post" class="form-horizontal">
        
        <div class="form-group">
            <div class="row">
                <label class="col-sm-2">Nome Completo</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="name">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <label class="col-sm-2">E-Mail</label>
                <div class="col-sm-10">
                    <input class="form-control" type="email" name="email">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">

                <label class="col-sm-2">Senha</label>
                <div class="col-sm-4">
                    <input class="form-control" type="password" name="password">
                </div>

                <label class="col-sm-2">Confirma Senha</label>
                <div class="col-sm-4">
                    <input class="form-control" type="password" name="password_confirmation">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <label class="col-sm-2"></label>
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-success btn-sm" value="Cadastrar">
                </div>
            </div>
        </div>

    </form>
@endsection

@section('js')
    <script src=""></script>
@endsection