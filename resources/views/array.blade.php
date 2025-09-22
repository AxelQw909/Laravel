<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
     <div class="container3">

            @for ($i = 1; $i < 13; $i++)

                <div class="card">
                    <img src="{{ Vite::asset('resources/img/'.$path'.png') }}">
                    <h2>[$title]</h2>
                    <p>[$price]</p>
                </div>
                <div class="card">
                    <img src="{{ Vite::asset('resources/img/'.$path'.png') }}">
                    <h2>[$title]</h2>
                    <p>[$price]</p>
                </div>
            @endfor

        </div>
</body>
</html>