<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laptops</title>
    <link rel="stylesheet" href="css/Accessoriespage.css"> 
    <link rel="stylesheet" href="css/styles.css"> 
</head>
<body onload="showComputers()">
    @include('partials.navbar')
    <h2>Laptops</h2>
    <main class="container">
        <div id="filters">
            <!-- Filters section -->
        </div>
        <div class="products">
            @foreach($products as $product)
            <div class="product">
                <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}">
                <h3><a href="{{ route('product.show' , $product->id) }}">{{ $product->name }}</a></h3>
                <div class="product-details">
                    <p>Brand: {{ $product->brand }}</p>
                    <p>Price: ${{ $product->price }}</p>
                    <p>Storage: {{ $product->storage }}</p>
                    <p>Operating System: {{ $product->operating_system }}</p>
                                        
                    
                    <!-- Buttons -->
                    <button class="btn btn-add">Add to Cart</button>
                </div>
            </div>
            @endforeach
        </div>
        
        
    </main>
    @include('partials.footer')
    <script src="js/Computerspage.js"> </script>    
</body>
</html>
