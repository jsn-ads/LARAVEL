@extends('adminlte::page')

@section('title','Editar Página')

@section('css')
    <link rel="stylesheet" href="style.css">
@endsection

@section('content_header')
    <h1>
        Editar Página
    </h1>
@endsection

@section('content')

<div class="card">
    <div class="card-body">

    <form action="{{route('pages.update',['page'=>$page->id])}}" method="post" class="form-horizontal">
        @method('PUT')
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
         @endif

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Título</label>
            <div class="col-sm-10">
                <input class="form-control @error('title') is-invalid  @enderror" type="text" name="title" value="{{$page->title}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Corpo</label>
            <div class="col-sm-10">
                <textarea name="body" id="body" cols="30" rows="10" class="form-control bodyfield @error('body') is-invalid  @enderror">{{$page->body}}</textarea>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <input type="submit" class="btn btn-primary btn-sm" value="Atualizar">
            </div>
        </div>

    </form>

    </div>
</div>

@endsection

@section('js')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector:'textarea.bodyfield',
            height:300,
            menubar:false,
            plugins:['link','table','image','autoresiza','lists'],
            toolbar:'undo redo | formatselect | bold italic backcolor | alignleft alignright aligncenter alignjustify | table | bullist numlist',
            content_css:[
                '{{asset('assets/css/content.css')}}'
            ]
        });
    </script>
@endsection