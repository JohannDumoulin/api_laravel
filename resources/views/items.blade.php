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
    <body data-page="items">
        <section>
            <div id="go_back">
                <a href="../../../">Home</a>
                <img src="{{ asset('img/arrow_back.svg') }}" alt="">
            </div>

            <h1>List of all items</h1>         
            <div id="item_list">
                @foreach ($item_list as $item)
                    <a href="/item/{{ $item['name'] }}"><div class="item_content">
                        <img src="{{ $item['img'] }}" alt="">
                        <p>#{{ $item['id'] }} {{ $item['name'] }}</p>
                    </div></a>
                @endforeach
            </div>
            
            <div id="buttons">
                <a href="{{ $prev_page }}"><p class="button prev">Prev</p></a>
                <a href="{{ $next_page }}"><p class="button next">Next</p></a>
            </div>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
