 <title>Accessories</title>
    <link rel="stylesheet" href="css/categories.css"> 
    @include('partials.navbar')
    <h2>Accessories</h2>
    <main class="container">
        <div id="filters">
            <div class="filter-section">
                <h2>Category</h2>
                <ul>
                    <li><input type="checkbox" id="category-keyboards"><label for="category-keyboards">Keyboards</label></li>
                    <li><input type="checkbox" id="category-mice"><label for="category-mice">Mice</label></li>
                    <li><input type="checkbox" id="category-monitors"><label for="category-monitors">Monitors</label></li>
                    <li><input type="checkbox" id="category-webcams"><label for="category-webcams">Webcams</label></li>
                    <li><input type="checkbox" id="category-headsets"><label for="category-headsets">Headsets</label></li>
                    <li><input type="checkbox" id="category-cables"><label for="category-cables">Cables</label></li>
                </ul>
                <a href="#">See more</a>
            </div>
            <div class="category-section">
            <h21>PRICE</h21>
            <input type="range" id="priceRange" min="0" max="5000" step="1" value="5000" oninput="updatePriceLabel(this.value)">
            <label for="priceRange" id="priceLabel">£0 to £5000</label>
        </div>
        <div class="filter-section">
                <h2>Brand</h2>
                <ul>
                    <li><input type="checkbox" id="brand-logitech"><label for="brand-logitech">Logitech</label></li>
                    <li><input type="checkbox" id="brand-acer"><label for="brand-acer">Acer</label></li>
                    <li><input type="checkbox" id="brand-hp"><label for="brand-hp">HP</label></li>
                    <li><input type="checkbox" id="brand-dell"><label for="brand-dell">Dell</label></li>
                    <li><input type="checkbox" id="brand-sony"><label for="brand-sony">Sony</label></li>
                </ul>
            </div>
            <div class="filter-section">
                <h2>Customer Ratings</h2>
                <ul>
                    <li><input type="checkbox" id="rating-5-stars"><label for="rating-5-stars">5★ & above</label></li>
                    <li><input type="checkbox" id="rating-4-stars"><label for="rating-4-stars">4★ & above</label></li>
                    <li><input type="checkbox" id="rating-3-stars"><label for="rating-3-stars">3★ & above</label></li>
                    <li><input type="checkbox" id="rating-2-stars"><label for="rating-2-stars">2★ & above</label></li>
                    <li><input type="checkbox" id="rating-1-star"><label for="rating-1-star">1★ & above</label></li>
                </ul>
            </div>
        </div>
            <div class="products">
                @foreach($products as $product)
                <div class="product" data-product-id="{{ $product->id }}">
                    <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}">
                    <h3>Brand {{ $product->name }}</h3>
                    <div class="product-details">
                        <p>Description {{ $product->description }}</p>
                        <p>Price: ${{ $product->price }}</p>
                        @php
                            $productName = $product->name;
                            $productCount = $productQuantities[$productName] ?? 0;
                        @endphp
                        @if($productCount > 2)
                            <span class="badge badge-success">In Stock:  {{ $productCount }}</span>
                        @else
                            <span class="badge badge-danger">Low Stock: ({{ $productCount }})</span>
                        @endif
                        <!-- Form for adding product to cart -->
                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_name" value="{{ $product->name }}">
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="price" value="{{ $product->price }}"> <!-- Include the price -->
                            <button type="submit" class="btn btn-add-cart">Add to Cart</button>
                        </form>
                        
                    </div>
                </div>
            @endforeach
            
            </div>
            
        </div>
</main>
@include('partials.footer')
{{-- <script src="js/categories.js"></script> --}}

