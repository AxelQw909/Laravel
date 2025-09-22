<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container2">

        <div class="header">
            <h1>Шапка</h1>
            <img class="logo" src="{{ Vite::asset('resources/img/logog.jpg') }}" alt="логотип">
        </div>
        <br>
        <div class="main">
            <h1>Контент часть</h1>
            <img class="img2" src="{{ Vite::asset('resources/img/chack.png') }}" alt="чак">
            <img class="img2" src="{{ Vite::asset('resources/img/red.png') }}" alt="чак">
            <p>Пункт 1</p>
            <p>Пункт 2</p>
            <p>Пункт 3</p>
        </div>
        <br>
        <div class="footer">
            <h1>Подвал</h1>
            <p>Сурков Дмитрий Евгеньевич 2025</p>
        </div>

    </div>
</body>
</html>