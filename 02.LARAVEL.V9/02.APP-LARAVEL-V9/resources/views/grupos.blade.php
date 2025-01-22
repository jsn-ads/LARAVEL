<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grupos</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            display: flex;
            justify-content: center;
        }

        main {
            width: 1000px;
        }

        section {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
        }

        div {
            width: 200px;
            height: 200px;
        }
    </style>
</head>

<body>
    <header>
        <nav></nav>
    </header>
    <main>
        <section>
            @foreach ($group as $people)
                <div>
                    <img src="{{ $people['img'] }}" alt="">
                </div>
            @endforeach
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>
