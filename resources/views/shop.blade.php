<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Products Page</title>
</head>
<body>
    @include('partials.navbar')
<div class="product-grid">
    @foreach ($products as $product)
        <div class="product-card"> 
            <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
            <div class="product-details">
                <h2 class="product-name">{{ $product->name }}</h2>
                <p class="product-description">{{ $product->description }}</p>
                <p class="product-price">${{ $product->price }}</p>
                <button class="btn btn-add" data-product-id="{{ $product->id }}">Add to Cart</button>
            </div>
        </div>
    @endforeach
</div>
    @include('partials.footer')
    <script src="{{ asset('js/productpage.js') }}"></script>
    
</body>

</html>
