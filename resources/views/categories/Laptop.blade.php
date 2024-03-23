<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laptops</title>
    <link rel="stylesheet" href="css/categories.css">
    <link rel="stylesheet" href="css/Accessoriespage.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body onload="showComputers()">
    @include('partials.navbar')
    <h2>Laptops</h2>
    <main class="container">
        <div id="filters">
            <div class="filter-section">
                <h2>Category</h2>
                <ul>
                    <li><input type="checkbox" id="category-keyboards"><label for="category-keyboards">Keyboards</label></li>
                    <!-- Other category checkboxes -->
                </ul>
                <a href="#">See more</a>
            </div>
            <div class="category-section">
                <h2>Price</h2>
                <input type="range" id="priceRange" min="0" max="5000" step="1" value="5000" oninput="updatePriceLabel(this.value)">
                <label for="priceRange" id="priceLabel">£0 to £5000</label>
            </div>
            <!-- Other filter sections -->
        </div>
        <div class="products">
            @foreach($products as $product)
                <div class="product" data-product-id="{{ $product->id }}">
                    <a href="{{ route('product.show', $product->id) }}">
                        <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}">
                        <h3 style="color: blue;">{{ $product->name }}</h3>
                    </a>
                    <div class="product-details">
                        <p>Description {{ $product->description }}</p>
                        <p>Price: ${{ $product->price }}</p>
                        <p>Storage: {{ $product->storage }}</p>
                        <p>Operating System: {{ $product->operating_system }}</p>
                        
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="product_name" value="{{ $product->name }}">
                            <input type="hidden" name="product_quantity" value="1">
                            <input type="hidden" name="product_price" value="{{ $product->price }}">
                            
                            <button type="submit" class="btn btn-add">Add to Cart</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
    @include('partials.footer')
</body>
</html>
