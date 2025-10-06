<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование продукта</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Создание продукта</h1>
    <form action="{{route('products.update', $product->id)}}" method="post">
        @csrf
        @method('put')
        <input type="text" name="name" value="{{$product->name}}"
        ><br>

        <input type="text" name="prise" value="{{$product->prise}}"><br>

        <textarea name="description">{{$product->description}}</textarea><br>

        <input type="submit" value="Создать товарт">
    </form>
</body>
</html>