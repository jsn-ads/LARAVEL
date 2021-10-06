@extends('app.template.basic')

@section('title','Produto - Cadastrar')

@section('conteudo')
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Produto-Adicionar</p>
        </div>

        @component('app.template.parcials.menuproduto')

        @endcomponent

        <div class="informacao-pagina">
            <div style="width:30%;margin-left: auto;margin-right: auto;">
                <form action="{{route('produto.store')}}" method="post">

                    @csrf

                    <input type="text" name="nome" placeholder="Nome" value="{{old('nome')}}" class="borda-preta">
                    <div style="color:red;">{{$errors->has('nome') ? $errors->first('nome') : ''}}</div>

                    <input type="text" name="descricao" placeholder="Descrição" value="{{old('descricao')}}" class="borda-preta">
                    <div style="color:red;">{{$errors->has('descricao') ? $errors->first('descricao') :''}}</div>

                    <input type="number" name="peso" placeholder="Peso" value="{{old('peso')}}" class="borda-preta">
                    <div style="color:red;">{{$errors->has('peso') ? $errors->first('peso') :''}}</div>

                    <select name="id_unidade">
                        <option value="">Select Unidade</option>
                        @foreach ($unidades as $unidade)
                            <option value="{{$unidade->id}}" {{old('id_unidade') == $unidade->id ? 'selected':''}}>{{$unidade->unidade}}</option>
                        @endforeach
                    </select>
                    <div style="color:red;">{{$errors->has('id_unidade') ? $errors->first('id_unidade') :''}}</div>

                    <button type="submit" class="borda-preta">Cadastrar</button>

                </form>
            </div>
        </div>
    </div>
@endsection
