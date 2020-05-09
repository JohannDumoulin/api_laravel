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
    <body data-page="pokemon">
        <section>
            <div id="pokemon_id">
                <p>#{{ $id }}</p>
                <p>#{{ $id }}</p>
            </div>

            <div id="container">
                <div id="desc_head">
                    <img src="{{ $img }}" alt="Image of {{ $name }}">
                    <div id="desc_head_content">
                        <h1>{{ $name }}</h1>
                        
                        <p>Height : <span class="bold">{{ $height }} m</span></p>
                        <p>Weight : <span class="bold">{{ $weight }} kg</span></p>
                        <p>
                            @if (count($types) <= 1)
                                Type :
                            @else
                                Types :
                            @endif
                             
                            @foreach ($types as $type)
                                @if ($type == last($types))
                                    <span class="bold">{{ $type }}</span>
                                @else
                                    <span class="bold">{{ $type }}</span>,
                                @endif
                            @endforeach
                        </p>
                    </div>
                </div>

                <div id="content">
                    <div id="abilities">
                        <h2>
                            @if (count($abilities) <= 1)
                                Ability :
                            @else
                                Abilities :
                            @endif
                        </h2>
                    
                            @foreach ($abilities as $ability)
                                <p>- {{ $ability }}</p>
                            @endforeach
                        
                    </div>

                    <div id="stats">
                        <h2>Stats :</h2>
                        <p>Speed : <span class="bold">{{ $speed }}</span></p>
                        <p>Special-defense : <span class="bold">{{ $special_defense }}</span></p>
                        <p>Special-attack : <span class="bold">{{ $special_attack }}</span></p>
                        <p>Defense : <span class="bold">{{ $defense }}</span></p>
                        <p>Attack : <span class="bold">{{ $attack }}</span></p>
                        <p>Hp : <span class="bold">{{ $hp }}</span></p>
                    </div>
                </div>
            </div>

            <div id="go_back">
                <a href="{{ url()->previous() }}">Return</a>
                <img src="{{ asset('img/arrow_back.svg') }}" alt="">
            </div>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
