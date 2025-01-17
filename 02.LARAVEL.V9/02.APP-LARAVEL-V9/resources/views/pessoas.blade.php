<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesssoas</title>
    <style>
        body {
            padding: 0%;
            margin: 0%;
        }

        header {
            display: flex;
            width: 100%;
            height: 50px;
        }

        nav {
            flex: 1;
            text-align: center
        }

        main {
            display: flex;
            justify-content: center;
        }

        section {
            width: 70%;
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <h1>TALVEZ VOCÊ CONHEÇA ???</h1>
        </nav>
    </header>
    <main>
        <section>
            @foreach ($pessoas as $pessoa)
                @component('components.peoplecard')
                    <div style="text-align: center; padding: 10% 0%">
                        <img src="{{ $pessoa['image'] }}" alt="" width="90%;">
                    </div>
                    <div style="font-size: 30px; padding: 0% 10%">
                        <strong>{{ $pessoa['name'] }}</strong>
                    </div>

                    <div style="font-size: 20px; padding: 10% 10%">
                        {{ $pessoa['age'] }} Anos
                    </div>

                    <div style="padding: 0% 10%">
                        Nasceu em : {{ $pessoa['birthdate'] }}
                    </div>
                @endcomponent
            @endforeach
        </section>
    </main>
    <footer>

    </footer>
</body>


</html>
