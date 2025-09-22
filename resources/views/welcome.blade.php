<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
     
    </head>
    <body>
        <h1>Знакомство с Laraevel</h1>

        <a href="{{ route('second') }}">Вторая страница</a>
        <a href="/third">Третья страница</a>

        <div class="container">

            @for ($i = 1; $i < 13; $i++)

                <div class="card">
                    <img src="{{ Vite::asset('resources/img/cats-'.$i.'.jpg') }}">
                    <h2>Товаря {{$i}}</h2>
                    <p>Описание товара</p>
                    @if($i %2 == 0)
                        <p class="new">Новинка</p>
                    @endif
                </div>
            @endfor

        </div>
    </body>
</html>
