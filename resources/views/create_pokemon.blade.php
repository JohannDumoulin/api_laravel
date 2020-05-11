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
    <body data-page="create_pokemon">
        <section id="create_custom_pokemon">
            <h1>Create your pokemon :</h1>
            <form action="{{ route('pokemons-send') }}" method="post" name="form" enctype="multipart/form-data">
                 @csrf
                <div id="general_specs">
                    <input type="text" name="name" placeholder="Name">
                    <input type="file" name="img">
                </div>
                <div id="basics_specs">
                    <input type="text" name="height" placeholder="Height">
                    <input type="text" name="weight" placeholder="Weight">
                    <input type="text" name="types" placeholder="Types">
                    <input type="text" name="abilities" placeholder="Abilities">
                </div>
                <div id="stats">
                    <input type="text" name="speed" placeholder="Speed">
                    <input type="text" name="special-defense" placeholder="Special-defense">
                    <input type="text" name="special-attack" placeholder="Special-attack">
                    <input type="text" name="defense" placeholder="Defense">
                    <input type="text" name="attack" placeholder="Attack">
                    <input type="text" name="hp" placeholder="Hp">
                </div>
                <input type="submit" value="Create">
            </form>
        </section>
            

        <section id="custom_pokemons_container">
            <h2>Latest Pokemons create :</h2>
            <div id="the_pokemon_header">
                <div><p>Name</p></div>
                <div><p>Picture</p></div>
                <div><p>Height</p></div>
                <div><p>Weight</p></div>
                <div><p>Type(s)</p></div>
                <div><p>Ability(ies)</p></div>
                <div><p>Speed</p></div>
                <div><p>Special-defense</p></div>
                <div><p>Special-Attack</p></div>
                <div><p>Defense</p></div>
                <div><p>Attack</p></div>
                <div><p>Hp</p></div>
            </div>
            @foreach($custom_pokemons as $pokemon)
                <div class="the_pokemon">
                    <div><p>{{ $pokemon->name }}</p></div>
                    <div><img src="{{ $pokemon->img }}" alt=""></div>
                    <div><p>{{ $pokemon->height }} m</p></div>
                    <div><p>{{ $pokemon->weight }} kg</p></div>
                    <div><p>{{ $pokemon->types }}</p></div>
                    <div><p>{{ $pokemon->abilities }}</p></div>
                    <div><p>{{ $pokemon->speed }}</p></div>
                    <div><p>{{ $pokemon->special_defense }}</p></div>
                    <div><p>{{ $pokemon->special_attack }}</p></div>
                    <div><p>{{ $pokemon->defense }}</p></div>
                    <div><p>{{ $pokemon->attack }}</p></div>
                    <div><p>{{ $pokemon->hp }}</p></div>
                </div>
            @endforeach

            <div id="go_back">
                <a href="../">Return</a>
                <img src="{{ asset('img/arrow_back.svg') }}" alt="">
            </div>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
