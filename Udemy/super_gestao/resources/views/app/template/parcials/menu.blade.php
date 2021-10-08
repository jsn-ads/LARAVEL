<div class="topo">
    <div class="logo">
        <img src="{{ asset('assets/img/logo.png') }}">
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app') }}">Home</a></li>
            <li><a href="{{ route('app.fornecedor') }}">Fornecedor</a></li>
            <li><a href="{{ route('app.cliente') }}">Cliente</a></li>
            <li><a href="{{ route('produto.index') }}">Produto</a></li>
            <li><a href="{{ route('produto_detalhe.index') }}">Produto detalhe</a></li>
            <li><a href="{{ route('app.sair') }}">Sair</a></li>
        </ul>
    </div>
</div>
