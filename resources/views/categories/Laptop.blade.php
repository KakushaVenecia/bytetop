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
                <div class="product" data-product-id="{{ $product->id }}">
                    <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}">
                    <h3><a href="{{ route('product.show' , $product->id) }}">{{ $product->name }}</a></h3>
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
        
        </div>
{{-- <script src="js/categories.js"></script> --}}
</main>
@include('partials.footer')


