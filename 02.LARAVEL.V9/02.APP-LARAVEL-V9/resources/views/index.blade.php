<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 9</title>
</head>

<body>

    <h2>E administrador ? {{ $name === 'Neto' ? 'Sim' : 'Não' }}</h2>

    @if ($name == 'Neto')
        <h1>Bem vindo {{ $name }}</h1>
        <p>Imprimindo codigo no blade : {!! $codigo !!}</p>
    @else
        <h1>Bem Vindo Usuario</h1>
    @endif


</body>

</html>
