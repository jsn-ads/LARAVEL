<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Includes Vs Componentes</title>
</head>

<body>
    <h1>Includes Vs Componentes</h1>

    @foreach ($people as $p)
        @include('components.people', $p)
    @endforeach

</body>

</html>
