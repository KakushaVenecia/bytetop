<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="css/productpage.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body onload="showProducts('all')"> <!-- Call showProducts function with 'all' argument on page load -->
    @include('partials.navbar')
    <main>
        <div id="categories">
            <div class="category-section">
                <h2>CATEGORIES</h2>
                <ul>
                    @foreach($categories as $category)
                        <li><a href="#" onclick="showProducts('{{ $category }}')">{{ $category }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="category-section">
                <h2>PRICE</h2>
                     <input type="range" id="priceRange" min="0" max="5000" step="1" value="5000" oninput="updatePriceLabel(this.value)">
                     <label for="priceRange" id="priceLabel">£0 to £5000</label>
            </div>

            <div class="category-section">
                <h2>BRAND</h2>
                <ul>
                    <li><input type="checkbox" id="brand-abc"><label for="brand-abc">Apple</label></li>
                    <li><input type="checkbox" id="brand-xyz"><label for="brand-xyz">Asus</label></li>
                    <li><input type="checkbox" id="brand-hp"><label for="brand-hp">HP</label></li>
                    <li><input type="checkbox" id="brand-dell"><label for="brand-dell">Dell</label></li>
                    <li><input type="checkbox" id="brand-lenovo"><label for="brand-lenovo">Lenovo</label></li>
                </ul>
            </div>

            <div class="category-section">
                <h2>TYPE</h2>
                <ul>
                    <li><input type="checkbox" id="type-laptop"><label for="type-laptop">Laptop</label></li>
                    <li><input type="checkbox" id="type-desktop"><label for="type-desktop">Desktop</label></li>
                    <ul>
                        <li><input type="checkbox" id="subtype-gaming"><label for="subtype-gaming">Gaming</label></li>
                        <li><input type="checkbox" id="subtype-business"><label for="subtype-business">Business</label></li>
                    </ul>
                </ul>
            </div>
        </div>

        <div id="products">
            <div class="breadcrumb">
                <p><a href="#" onclick="showProducts('all')">All Products</a></p>
            </div>

            <div class="product-container" id="productContainer">
                <!-- Blade foreach to iterate over products -->
                @foreach($products as $product)
                    <div class="product" data-category="{{ $product->category }}"> <!-- Add data-category attribute to each product -->
                        <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
                        <h2><a href="/product/{{ $product->id }}">{{ $product->name }}</a></h2>
                        <p>{{ $product->description }}</p>
                        <p>Price: £{{ $product->price }}</p>
                        <button class="btn btn-add" data-product-id="{{ $product->id }}" data-product-name="{{ $product->name }}" data-product-price="{{ $product->price }}">Add to Cart</button>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    @include('partials.footer')
    <script src="js/productpage.js"></script>
</body>
</html>