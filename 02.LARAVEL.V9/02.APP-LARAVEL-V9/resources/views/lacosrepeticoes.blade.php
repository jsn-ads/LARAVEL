<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laços de Repetições</title>
</head>

<body>
    @for ($i = 1; $i < 10; $i++)
        <p> funcionario {{ $i }}</p>
    @endfor

    @foreach ($lista as $item)
        <p>{{ $item }}</p>
    @endforeach
</body>

</html>
