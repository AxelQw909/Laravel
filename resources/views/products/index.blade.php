<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>Каталог товаров</h1>
        <p>{{$buyer->user->name}}</p>
        <p>{{$buyer->address}}</p>
    </header>
    <main>

    <a href="{{route('products.create')}}">Создание товара</a>
        <div class="container1">
            @foreach($categories as $category)

                <h2>{{$category->name}}</h2>
                 

                    @foreach($category->products as $product)
                        <div class="card">
                            <h1>
                                <a href="{{route('products.show',$product->id)}}">{{$product -> name}}</a>
                            </h1>
                            <p>{{$product -> prise}}</p>
                            <p>{{$product -> descripshion}}</p>
                            <p>{{$product -> category -> name}}</p>
                            <div>
                                @foreach($product->features as $feature)
                                    <p>
                                        {{$feature->name}} -
                                        {{$feature->pivot->value}} - 
                                        {{$feature->unit}}
                                    </p>
                                @endforeach
                            </div>

                            <form method="POST" action="{{route('products.destroy',$product->id)}}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Удалить">
                            </form>
                                <a href="{{route('products.edit',$product->id)}}"> Редактировать</a>

                            <hr>
                        </div>
                    @endforeach
            @endforeach

            
        </div>
    </main>
</body>
</html>