<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Super Gestão - @yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>

    <body>

        <div class="topo">
            <div class="logo">
                <img src="{{ asset('assets/img/logo.png') }}">
            </div>

            <div class="menu">
                <ul>
                    <li><a href="{{ route('inicio') }}">Principal</a></li>
                    <li><a href="{{ route('sobre') }}">Sobre</a></li>
                    <li><a href="{{ route('contato') }}">Contato</a></li>
                </ul>
            </div>
        </div>
        @yield('conteudo')
    </body>
</html>
