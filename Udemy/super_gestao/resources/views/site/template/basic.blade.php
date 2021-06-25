<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Super Gestão - @yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>

    <body>
        @include('site.template.parcials.menu')
        @yield('conteudo')
    </body>
</html>
