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
            <div id="container">
                <div id="desc_head">
                    <img src="{{ $img }}" alt="Image of {{ $name }}">
                    <div id="desc_head_content">
                        <h1>{{ $name }}</h1>
                        <p>#{{ $id }}</p>
                        <p>Height : {{ $height }} m</p>
                        <p>Weight : {{ $weight }} kg</p>
                        <p>
                            @if (count($types) <= 1)
                                Type :
                            @else
                                Types :
                            @endif
                             
                            @foreach ($types as $type)
                                @if ($type == last($types))
                                    {{ $type }}
                                @else
                                    {{ $type }},
                                @endif
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <p>{{ dd($response) }}</p>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
