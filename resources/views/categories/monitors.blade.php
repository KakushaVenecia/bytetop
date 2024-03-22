<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitors</title>
    <link rel="stylesheet" href="css/Accessoriespage.css">
    <link rel="stylesheet" href="css/styles.css">

</head>

<body onload="showAccessories()">
    @include('partials.navbar')
    <h2>Monitors</h2>
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
            <div class="product">
                <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}">
                <h3><a href="{{ route('product.show' , $product->id) }}">{{ $product->name }}</a></h3>
                <div class="product-details">
                    <p>Brand: {{ $product->brand }}</p>
                    <p>Price: ${{ $product->price }}</p>
                    <p>Storage: {{ $product->storage }}</p>
                    <p>Operating System: {{ $product->operating_system }}</p>
                   
                    <button class="btn btn-add">Add to Cart</button>
                </div>
            </div>

            @endforeach
        </div>
    </main>
    @include('partials.footer')
    <script>
        function updatePriceLabel(value) {
            const priceLabel = document.getElementById('priceLabel');
            priceLabel.textContent = `£0 to £${value}`;
        }
    </script>
</body>

</html>