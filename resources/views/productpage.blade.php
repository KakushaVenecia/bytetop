
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
            
            {{-- @foreach($uniqueProductNames as $name)
            <div class="product-card">
                
                @php
                    // Get the product details from the $products array
                    $product = collect($products)->firstWhere('name', $name);
                    $count = $productCounts[$name] ?? 0; // If count doesn't exist, default to 0
                @endphp
                <div class="product-image">
                    
                    <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $name }}" class="product-image">
                </div>
                <div class="product-info">
                    
                    <h5>{{ $name }}</h5>
                    <h6> £{{ $product->price }}</h6>
                </div>
            </div>
            @endforeach --}}
        </section>
        <div id="categories">
            <div class="category-section">
                <h2>CATEGORIES</h2>
                
            </div>
            <div class="category-section">
                <h2>PRICE</h2>
                     <input type="range" id="priceRange" min="0" max="5000" step="1" value="5000" oninput="updatePriceLabel(this.value)">
                     <label for="priceRange" id="priceLabel">£0 to £5000</label>
            </div>
            <div class="category-section">
                <h2>BRAND</h2>
                
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
            
            
            </div>
        </div>
    </main>
    @include('partials.footer')
    <script src="js/productpage.js"></script>
    <script >


        function showProducts(category) {
            
            if (category === 'all') {
                
                document.querySelectorAll('.product').forEach(function (product) {
                    product.style.display = 'block';
                });
            } else {
                
                document.querySelectorAll('.product').forEach(function (product) {
                    product.style.display = 'none';
                });

                
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
</html> -->