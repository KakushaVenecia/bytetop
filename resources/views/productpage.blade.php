<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Products</title>
    <link rel="stylesheet" href="css/productpage.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body onload="showProducts('all')"> <!-- Call showProducts function with 'all' argument on page load -->
    @include('partials.navbar')
    <nav class="product-filter">
        <h1>Laptops</h1>
        <div class="sort">
          <div class="collection-sort">
            <label>Filter by:</label>
            <select>
            {{-- @foreach($uniqueProductNames as $name)
              <option value="/">{{ $name }}</option>
            @endforeach --}}
            </select>
          </div>
      
          <div class="collection-sort">
            <label>Sort by:</label>
            <select>
              <option value="/">Featured</option>
            </select>
          </div>
      
        </div>
      
      </nav>

      


    <main>
        <section class="products">
            <!-- Iterate over unique product names -->
            {{-- @foreach($uniqueProductNames as $name)
            <div class="product-card">
                <!-- Retrieve product details for the current product name -->
                @php
                    // Get the product details from the $products array
                    $product = collect($products)->firstWhere('name', $name);
                    $count = $productCounts[$name] ?? 0; // If count doesn't exist, default to 0
                @endphp
                <div class="product-image">
                    <!-- Display product image -->
                    <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $name }}" class="product-image">
                </div>
                <div class="product-info">
                    <!-- Display product name and price -->
                    <h5>{{ $name }}</h5>
                    <h6> £{{ $product->price }}</h6>
                </div>
            </div>
            @endforeach --}}
        </section>
        <div id="categories">
            <div class="category-section">
                <h2>CATEGORIES</h2>
                <ul>
                    {{-- @foreach($categories as $category)
                        <li><a href="#" onclick="showProducts('{{ $category }}')">{{ $category }}</a></li>
                    @endforeach --}}
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
                    {{-- @foreach($uniqueProductNames as $name)
                        <li>
                            <input type="checkbox" id="brand-{{ strtolower($name) }}" value="{{ $name }}" class="brand-checkbox">
                            <label for="brand-{{ strtolower($name) }}">{{ $name }}</label>
                        </li>
                    @endforeach --}}
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
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <div class="modal-details">
                        <img id="modalProductImage" alt="Product Image" class="modal-image">
                        <div class="product-info">
                            <h2 id="modalProductName"></h2>
                            <p id="modalProductDescription"></p>
                            <p id="modalProductPrice"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="productDetails">
                {{-- @foreach($uniqueProductNames as $name)
                <div class="product">
                    <h2>{{ $name }}</h2>
                    @php
                        // Get the product details from the $products array
                        $product = collect($products)->firstWhere('name', $name);
                        $count = $productCounts[$name] ?? 0; // If count doesn't exist, default to 0
                    @endphp
                    <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $name }}" class="product-image">
                    <p>{{ $product->description }}</p>
                    <p>Price: £{{ $product->price }}</p>
                    <p>Stock: {{ $count }}</p>
                    {{-- Add to cart button --}}
                    {{-- <button onclick="openModal('{{ $product->name }}', '{{ $product->description }}', '{{ $product->price }}', '{{ asset('storage/images/' . $product->image) }}')">View</button>
                    <button class="btn-add" data-product-id="{{ $product->id }}">Add to Cart</button>
                </div>
            @endforeach --}} 
            
            </div>
        </div>
    </main>
    @include('partials.footer')
    <script src="js/productpage.js"></script>
    <script >


        function showProducts(category) {
            // Fetch and display products based on the category
            if (category === 'all') {
                // Show all products
                document.querySelectorAll('.product').forEach(function (product) {
                    product.style.display = 'block';
                });
            } else {
                // Hide all products
                document.querySelectorAll('.product').forEach(function (product) {
                    product.style.display = 'none';
                });

                // Show products matching the selected category
                document.querySelectorAll('.product[data-category="' + category + '"]').forEach(function (product) {
                    product.style.display = 'block';
                });
            }
        }

        function updatePriceLabel(value) {
            const priceLabel = document.getElementById('priceLabel');
            priceLabel.textContent = `£0 to £${value}`;
        }
        function openModal(name, description, price, imageSrc) {
            console.log("buttttl;klk;k;")
    const modal = document.getElementById('myModal');
    const productName = document.getElementById('modalProductName');
    const productDescription = document.getElementById('modalProductDescription');
    const productPrice = document.getElementById('modalProductPrice');
    const productImage = document.getElementById('modalProductImage');

    productName.textContent = name;
    productDescription.textContent = description;
    productPrice.textContent = `Price: £${price}`;
    productImage.src = imageSrc;

    modal.style.display = 'block';
}

    function closeModal() {
        const modal = document.getElementById('myModal');
        modal.style.display = 'none';
    }
</script>
<script src="js/nav.js"></script>
</body>
</html>