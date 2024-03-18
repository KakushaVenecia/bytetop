<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laptops</title>
    <link rel="stylesheet" href="css/laptoppage.css">
    
</head>
<body >
    @include('partials.navbar')
    <main>
        <div id="filters">
            <div class="filter-section">
                <h2>Brands</h2>
                <ul>
                    <li><input type="checkbox" id="brand-asus"><label for="brand-asus">ASUS</label></li>
                    <li><input type="checkbox" id="brand-lenovo"><label for="brand-lenovo">Lenovo</label></li>
                    <li><input type="checkbox" id="brand-hp"><label for="brand-hp">HP</label></li>
                    <li><input type="checkbox" id="brand-dell"><label for="brand-dell">Dell</label></li>
                    <li><input type="checkbox" id="brand-acer"><label for="brand-acer">Acer</label></li>
                    <li><input type="checkbox" id="brand-samsung"><label for="brand-samsung">Samsung</label></li>
                    <li><input type="checkbox" id="brand-apple"><label for="brand-apple">Apple</label></li>
                </ul>
                <a href="#">See more</a>
            </div>
            <div class="category-section">
    <h10>PRICE</h10>
    <input type="range" id="priceRange" min="0" max="5000" step="1" value="5000" oninput="updatePriceLabel(this.value)">
    <label for="priceRange" id="priceLabel">£0 to £5000</label>
</div>

           
            <div class="filter-section">
                <h2>Laptop Display Size</h2>
                <ul>
                    <li><input type="checkbox" id="display-size-9in"><label for="display-size-9in">Up to 9 in (24 cm)</label></li>
                    <li><input type="checkbox" id="display-size-12in"><label for="display-size-12in">10 to 12 in (25 to 32 cm)</label></li>
                    <li><input type="checkbox" id="display-size-14in"><label for="display-size-14in">13 to 14 in (33 to 36 cm)</label></li>
                    <li><input type="checkbox" id="display-size-16in"><label for="display-size-16in">15 to 16 in (38 to 41 cm)</label></li>
                    <li><input type="checkbox" id="display-size-17in"><label for="display-size-17in">17 in (42 cm) & above</label></li>
                </ul>
            </div>
            <div class="filter-section">
                <h2>Customer Ratings</h2>
                <ul>
                    <li><input type="checkbox" id="rating-4-and-above"><label for="rating-4-and-above">4★ & above</label></li>
                    <li><input type="checkbox" id="rating-3-and-above"><label for="rating-3-and-above">3★ & above</label></li>
                    <li><input type="checkbox" id="rating-2-and-above"><label for="rating-2-and-above">2★ & above</label></li>
                    <li><input type="checkbox" id="rating-1-and-above"><label for="rating-1-and-above">1★ & above</label></li>
                </ul> 
            </div>
            <div class="filter-section">
                <h2>HDD Capacity</h2>
                <ul>
                    <li><input type="checkbox" id="hdd-capacity-159gb"><label for="hdd-capacity-159gb">Up to 159 GB</label></li>
                    <li><input type="checkbox" id="hdd-capacity-249gb"><label for="hdd-capacity-249gb">160 to 249 GB</label></li>
                    <li><input type="checkbox" id="hdd-capacity-499gb"><label for="hdd-capacity-499gb">250 to 499 GB</label></li>
                    <li><input type="checkbox" id="hdd-capacity-999gb"><label for="hdd-capacity-999gb">500 to 999 GB</label></li>
                    <li><input type="checkbox" id="hdd-capacity-1tb"><label for="hdd-capacity-1tb">1 TB & above</label></li>
                </ul>
            </div>
            <div class="filter-section">
                <h2>RAM Type</h2>
                <ul>
                    <li><input type="checkbox" id="ram-ddr4"><label for="ram-ddr4">DDR4</label></li>
                    <li><input type="checkbox" id="ram-ddr"><label for="ram-ddr">DDR</label></li>
                    <li><input type="checkbox" id="ram-ddr4x"><label for="ram-ddr4x">DDR4X</label></li>
                    <li><input type="checkbox" id="ram-lpddr3"><label for="ram-lpddr3">LPDDR3</label></li>
                    <li><input type="checkbox" id="ram-ddr3"><label for="ram-ddr3">DDR3</label></li>
                    <li><input type="checkbox" id="ram-lpddr5x"><label for="ram-lpddr5x">LPDDR5X</label></li>
                    <li><input type="checkbox" id="ram-unified-memory"><label for="ram-unified-memory">Unified Memory</label></li>
                    <li><input type="checkbox" id="ram-lpddr4"><label for="ram-lpddr4">LPDDR4</label></li>
                    <li><input type="checkbox" id="ram-lpddr5"><label for="ram-lpddr5">LPDDR5</label></li>
                </ul>
            </div>
        </div>

        <div id="laptops">
            <!-- Container for displaying laptops -->
        </div>

        <div class="products">
            <h2> Laptops</h2>
            <div class="product">
                <img src="/images/img5.jpeg" alt="Laptop">
                
                <p>Brand: ASUS</p>
                <p>Price: £1000</p>
                <p>Display Size: 14 inch</p>
                <p>RAM: 8GB DDR4</p>
                <p>HDD: 512GB SSD</p>
                <p>Rating: 4.5 stars</p>
            </div>
            <div class="product">
                <img src="laptop2.jpg" alt="Laptop">
                
                <p>Brand: Lenovo</p>
                <p>Price: £900</p>
                <p>Display Size: 15.6 inch</p>
                <p>RAM: 16GB DDR4</p>
                <p>HDD: 1TB HDD</p>
                <p>Rating: 4.2 stars</p>
            </div>
            <div class="product">
                <img src="laptop2.jpg" alt="Laptop">
                <h3> </h3>
                <p>Brand: Lenovo</p>
                <p>Price: £900</p>
                <p>Display Size: 15.6 inch</p>
                <p>RAM: 16GB DDR4</p>
                <p>HDD: 1TB HDD</p>
                <p>Rating: 4.2 stars</p>
            </div>
            <div class="product">
                <img src="laptop2.jpg" alt="Laptop">
                
                <p>Brand: Lenovo</p>
                <p>Price: £900</p>
                <p>Display Size: 15.6 inch</p>
                <p>RAM: 16GB DDR4</p>
                <p>HDD: 1TB HDD</p>
                <p>Rating: 4.2 stars</p>
            </div>
            <div class="product">
                <img src="laptop2.jpg" alt="Laptop">
                
                <p>Brand: Lenovo</p>
                <p>Price: £900</p>
                <p>Display Size: 15.6 inch</p>
                <p>RAM: 16GB DDR4</p>
                <p>HDD: 1TB HDD</p>
                <p>Rating: 4.2 stars</p>
            </div>
            <!-- Repeat similar structure for other laptops -->
        </div>
    </main>
    <script src="js/laptoppage.js"></script>
    

</body>
</html>

