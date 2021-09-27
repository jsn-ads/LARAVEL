{{$slot}}

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="">

        </div>
    @endforeach
@endif

<form action="{{ route('contato')}}" method="POST">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="{{$classe}}" value="{{old('nome')}}">
    <br>
    <input name="telefone" placeholder="Telefone" class="{{$classe}}" value="{{old('telefone')}}">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="{{$classe}}" value="{{old('email')}}">
    <br>
    <select name="id_motivo_contatos" class="{{$classe}}">

       <option value="">Qual o motivo do contado</option>

       @foreach ($motivo_contatos as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{old('id_motivo_contatos') == $motivo_contato->id ? 'selected' : ''}}>{{$motivo_contato->motivo_contato}}</option>
       @endforeach
    </select>
    <br>
    <textarea name="mensagem" class="{{$classe}}" placeholder="Preencha aqui a sua mensagem">
        {{old('mensagem') ? old('mensagem') : null}}
    </textarea>
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>
