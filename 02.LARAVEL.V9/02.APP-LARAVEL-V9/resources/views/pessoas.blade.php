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
            justify-content: center
        }

        section {
            width: 70%;
            display: flex;
        }

        main section div {
            flex: 1;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <h1>Talvez você conheça</h1>
        </nav>
    </header>
    <main>
        <section>
            @foreach ($pessoas as $pessoa)
                @component('components.peoplecard')
                    <img src="{{ $pessoa['image'] }}" alt="">
                    {{ $pessoa['name'] }}
                    {{ $pessoa['age'] }}
                    {{ $pessoa['birthdate'] }}
                @endcomponent
            @endforeach
        </section>
    </main>
    <footer>

    </footer>
</body>


</html>
