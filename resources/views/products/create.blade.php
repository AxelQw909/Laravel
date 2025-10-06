<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание продукта</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Создание продукта</h1>
    <form action="{{route('products.store')}}" method="post">
        @csrf
        <input type="text" name="name"
        placeholder="Название товара"><br>
        <input type="text" name="prise"
        placeholder="Цена товара"><br>
        <textarea name="description" placeholder="Описание товара"></textarea><br>
        <input type="submit" value="Создать товарт">
    </form>
</body>
</html>