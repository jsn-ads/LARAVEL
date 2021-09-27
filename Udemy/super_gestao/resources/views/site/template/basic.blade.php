<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Super Gestão - @yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="">
    </head>

    <body>
        @include('site.template.parcials.menu')
        @yield('conteudo')
    </body>
</html>
