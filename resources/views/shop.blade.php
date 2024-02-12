<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
</head>
<body>
    @include('partials.navbar')
    <div class="product-grid">
        @foreach ($products as $product)
            <div class="product-card"> 
                <p>{{ $product->images }}</p>
            <img src="http://localhost:8000/storage/{{ $product->image }}" alt="{{ $product->name }}" class="product-image">
                <div class="product-details">
                    <h2 class="product-name">{{ $product->name }}</h2>
                    <p class="product-description">{{ $product->description }}</p>
                    <p class="product-price">${{ $product->price }}</p>
                </div>
            </div>
        @endforeach
    </div>
    @include('partials.footer')
</body>
</html>
