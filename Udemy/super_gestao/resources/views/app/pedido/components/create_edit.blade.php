@if (isset($pedido->id))
    <form action="{{route('pedido.update',$pedido->id)}}" method="post">
        @method('PUT')
 @else
    <form action="{{route('pedido.store')}}" method="post">
@endif
        @csrf

        <input type="text" name="nome" placeholder="Nome" value="{{$pedido->nome ?? old('nome')}}" class="borda-preta">
        <div style="color:red;">{{$errors->has('nome') ? $errors->first('nome') : ''}}</div>

        @if (isset($produto->id))
            <button type="submit" class="borda-preta">Atualizar</button>
        @else
            <button type="submit" class="borda-preta">Cadastrar</button>
        @endif

    </form>
