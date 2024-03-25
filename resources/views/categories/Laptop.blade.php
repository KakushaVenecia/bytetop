
<title>Computers</title>
<link rel="stylesheet" href="css/styles.css"> 

</head>
<body onload="showComputers()">
<link rel="stylesheet" href="css/categories.css"> 
@include('partials.navbar')
<h2>Laptops</h2>
<main class="container">
    <div id="filters">
        <div class="filter-section">
            <h2>Brand</h2>
            <ul>
                @foreach($products as $product)
                <li>
                    <input type="checkbox" id="category-{{ Str::slug($product->brand) }}" class="brand-checkbox" data-brand="{{ $product->brand }}" checked>
                    <label for="category-{{ Str::slug($product->brand) }}">{{ $product->brand }}</label>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="filter-section">
             <h2>Price</h2>
             <input type="range" id="priceRange" min="{{ $minComputerPrice ?? 0 }}" max="{{ $maxComputerPrice ?? 5000 }}" step="1" value="{{ $maxComputerPrice ?? 5000 }}" oninput="updatePriceLabel(this.value)">
             <label for="priceRange" id="priceLabel">£{{ $minComputerPrice ?? 0 }} to £{{ $maxComputerPrice ?? 5000 }}</label>
        </div>
        <div class="filter-section">
            <h2>Tags</h2>
            <ul class="tag-list">
                @foreach($allTags as $tag)
                <li>
                    <input type="checkbox" id="tag-{{ Str::slug($tag) }}" class="tag-checkbox" data-tag="{{ $tag }}">
                    <label for="tag-{{ Str::slug($tag) }}">{{ $tag }}</label>
                </li>
            @endforeach
            </ul>
        </div>
        {{-- <div class="filter-section">
            <h2>Customer Ratings</h2>
            <ul>
                <li><input type="checkbox" id="rating-5-stars"><label for="rating-5-stars">5★ & above</label></li>
                <li><input type="checkbox" id="rating-4-stars"><label for="rating-4-stars">4★ & above</label></li>
                <li><input type="checkbox" id="rating-3-stars"><label for="rating-3-stars">3★ & above</label></li>
                <li><input type="checkbox" id="rating-2-stars"><label for="rating-2-stars">2★ & above</label></li>
                <li><input type="checkbox" id="rating-1-star"><label for="rating-1-star">1★ & above</label></li>
            </ul>
        </div> --}}
    </div>
    @if ($products->isEmpty())
    <div class="no-products">
        <p>Products will be uploaded soon. We have run out of stock.</p>
    </div>
    @else
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="products">
        @foreach($products as $product)
        <div class="product" data-product-id="{{ $product->id }}" data-brand="{{ $product->brand }}" data-tags="{{ $product->tags }}">
            <a href="{{ route('product.show', $product->id) }}">
                <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}">
                <h3 style="color: blue;">{{ $product->name }}</h3>
            </a>
            <div class="product-details">
                <p>Brand: {{ $product->brand }}</p>
                <p>Description {{ $product->description }}</p>
                <p class="product-price">Price: ${{ $product->price }}</p>
                @foreach(explode(',', $product->tags) as $tag)
                    <span class="tag">{{ $tag }}</span>
                @endforeach       
                @if($isInCart[$product->id])
                <p class="text-danger">This product is already in your cart.</p>
                 @else
                <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="product_name" value="{{ $product->name }}">
                        <input type="hidden" name="product_quantity" value="1">
                        <input type="hidden" name="product_price" value="{{ $product->price }}">
                        <button type="submit" class="btn btn-add">Add to Cart</button>
                </form>
                @endif
            </div>
        </div>   
        @endforeach
    </div>
@endif

</main>
@if ($products->hasPages())
        <div class="pagination-links">
                {{ $products->links() }}
        </div>
        @endif

@include('partials.footer')

</body>
<script src="js\categories.js">
//  function updatePriceLabel(maxPrice) {
//         const priceLabel = document.getElementById('priceLabel');
//         if (priceLabel) {
//             priceLabel.textContent = '£0 to £' + maxPrice;
//         }
//     }
</script>

