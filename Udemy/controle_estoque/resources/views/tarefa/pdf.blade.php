@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    BEM VINDO PDF

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@auth
    {{-- esta tag e utiliza para mostrar conteudo para usuarios logados --}}
@endauth

@guest
    {{-- esta tag e utilizado para mostrar conteudo para usuarios não logados --}}
@endguest
