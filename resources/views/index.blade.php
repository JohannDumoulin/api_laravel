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
            <h1>PokeAPI</h1>

            <div id="container">
                <a href="/pokemons/page/1" class="content" id="pokemons">See all Pokemons</a>
                <a href="/items/page/1" class="content" id="items">See all Items</a>

                <a href="../../create-pokemon" class="content" id="create">Create your pokemon !</a>
            </div>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
