<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oxanium:400,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    </head>
    <body data-page="index">
        <section>
            <a href="/pokemons/page/1">
                <p>Pokemons</p>
            </a>
            <a href="">
                <p>Moves</p>
            </a>
            <a href="/items/page/1">
                <p>Items</p>
            </a>
            <a href="">
                <p>Berries</p>
            </a>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
