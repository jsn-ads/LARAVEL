<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Componente</title>
</head>

<body>
    <h1>Componente</h1>
    <ul>
        @foreach ($list as $item)
            <li>{{ $item }} -
                @component('components.botao')
                    @slot('backcolor')
                        yellow
                    @endslot
                    @slot('color')
                        black
                    @endslot
                    Editar
                @endcomponent
                @component('components.botao')
                    @slot('backcolor')
                        red
                    @endslot
                    @slot('color')
                        white
                    @endslot
                    Excluir
                @endcomponent
            </li>
        @endforeach
    </ul>
</body>

</html>
