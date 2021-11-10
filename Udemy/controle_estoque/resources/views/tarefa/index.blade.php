@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between">
                    <div>
                        Tarefas
                    </div>
                    <div>
                        <a href="{{route('tarefa.create')}}" title="adicionar tarefa"><img src="{{asset('img/add.png')}}" style="width: 20px"></a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nome</th>
                                <th scope="col" colspan='3'>Data Conclusão</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tarefas as $key => $tarefa)
                                <tr>
                                    <th scope="row">{{$tarefa->id}}</th>
                                    <td>{{$tarefa->tarefa}}</td>
                                    <td>{{date('d/m/Y' , strtotime($tarefa->data_conclusao))}}</td>
                                    <td><a href="{{ route('tarefa.edit' ,  $tarefa->id) }}" title="editar tarefa"><img src="{{asset('img/edit.png')}}" style="width: 15px;"></a></td>
                                    <td>
                                        <form action="" method="post">
                                            <a href="http://" title="deletar tarefa"><img src="{{ asset('img/delete.png') }}" style="width: 18px;"></a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="{{ $tarefas->previousPageUrl() }}">anterior</a></li>
                          @for ($i = 1; $i <= $tarefas->lastPage(); $i++)
                            <li class="page-item {{ $tarefas->currentPage() == $i ? 'active' : ''}}">
                                <a class="page-link" href="{{ $tarefas->url($i) }}">{{ $i }}</a>
                            </li>
                          @endfor
                          <li class="page-item"><a class="page-link" href=""{{ $tarefas->nextPageUrl() }}">proximo</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
