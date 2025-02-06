<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variações do Include</title>
</head>

<body>
    <h1>Variações do Include</h1>
</body>

{{-- Verifica a existencia do componente antes de utilizar --}}
@includeIf('.compontentText')

{{-- Exibe o component sem retorno for True --}}

@includeWhen(true, 'components.people', [
    'name' => 'Neto',
    'age' => 35,
    'birthdate' => '20/11/1989',
    'city' => 'Goiânia',
])

{{-- Tem a mesma proposta includeWhen porem esse metodo vai exibir sempre que resposta seja False --}}
@includeUnless(false, 'components.people', [
    'name' => 'Cristina',
    'age' => 37,
    'birthdate' => '11/12/1987',
    'city' => 'Israelandia',
])

{{-- Utilizando para exibir mais de um component --}}
@includeFirst(['components.msg', 'components.msg'], ['msg' => 'Boa tarde'])

</html>
