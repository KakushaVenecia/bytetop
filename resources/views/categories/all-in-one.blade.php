<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Computers</title>
    <link rel="stylesheet" href="css/Accessoriespage.css"> 
    <link rel="stylesheet" href="css/styles.css"> 
    
</head>
<body onload="showComputers()">
    @include('partials.navbar')
    <h2>All in One Desktops</h2>
    <main class="container">
        <div id="filters">
            <div class="filter-section">
                <h2>Brands</h2>
                <ul>
                    <li><input type="checkbox" id="brand-dell"><label for="brand-dell">Dell</label></li>
                    <li><input type="checkbox" id="brand-hp"><label for="brand-hp">HP</label></li>
                    <li><input type="checkbox" id="brand-lenovo"><label for="brand-lenovo">Lenovo</label></li>
                    <li><input type="checkbox" id="brand-apple"><label for="brand-apple">Apple</label></li>
                    <li><input type="checkbox" id="brand-acer"><label for="brand-acer">Acer</label></li>
                    <li><input type="checkbox" id="brand-asus"><label for="brand-asus">ASUS</label></li>
                </ul>
                <a href="#">See more</a>
            </div>
            <div class="filter-section">
                <h2>Customer Ratings</h2>
                <ul>
                    <li><input type="checkbox" id="rating-4-stars"><label for="rating-4-stars">4★ & above</label></li>
                    <li><input type="checkbox" id="rating-3-stars"><label for="rating-3-stars">3★ & above</label></li>
                    <li><input type="checkbox" id="rating-2-stars"><label for="rating-2-stars">2★ & above</label></li>
                    <li><input type="checkbox" id="rating-1-star"><label for="rating-1-star">1★ & above</label></li>
                </ul>
            </div>
            <div class="category-section">
                    <h20>PRICE</h20>
                    <input type="range" id="priceRange" min="0" max="5000" step="1" value="5000" oninput="updatePriceLabel(this.value)">
                    <label for="priceRange" id="priceLabel">£0 to £5000</label>
            </div>
            <div class="filter-section">
                <h2>RAM Size</h2>
                <ul>
                    <li><input type="checkbox" id="ram-4gb"><label for="ram-4gb">4GB</label></li>
                    <li><input type="checkbox" id="ram-8gb"><label for="ram-8gb">8GB</label></li>
                    <li><input type="checkbox" id="ram-16gb"><label for="ram-16gb">16GB</label></li>
                    <li><input type="checkbox" id="ram-32gb"><label for="ram-32gb">32GB</label></li>
                    <li><input type="checkbox" id="ram-64gb"><label for="ram-64gb">64GB</label></li>
                </ul>
            </div>
            <div class="filter-section">
                <h2>Processor</h2>
                <ul>
                    <li><input type="checkbox" id="processor-i3"><label for="processor-i3">Intel Core i3</label></li>
                    <li><input type="checkbox" id="processor-i5"><label for="processor-i5">Intel Core i5</label></li>
                    <li><input type="checkbox" id="processor-i7"><label for="processor-i7">Intel Core i7</label></li>
                    <li><input type="checkbox" id="processor-i9"><label for="processor-i9">Intel Core i9</label></li>
                    <li><input type="checkbox" id="processor-ryzen3"><label for="processor-ryzen3">AMD Ryzen 3</label></li>
                    <li><input type="checkbox" id="processor-ryzen5"><label for="processor-ryzen5">AMD Ryzen 5</label></li>
                    <li><input type="checkbox" id="processor-ryzen7"><label for="processor-ryzen7">AMD Ryzen 7</label></li>
                </ul>
            </div>
            <div class="filter-section">
                <h2>Storage</h2>
                <ul>
                    <li><input type="checkbox" id="storage-128gb"><label for="storage-128gb">128GB SSD</label></li>
                    <li><input type="checkbox" id="storage-256gb"><label for="storage-256gb">256GB SSD</label></li>
                    <li><input type="checkbox" id="storage-512gb"><label for="storage-512gb">512GB SSD</label></li>
                    <li><input type="checkbox" id="storage-1tb"><label for="storage-1tb">1TB HDD</label></li>
                    <li><input type="checkbox" id="storage-2tb"><label for="storage-2tb">2TB HDD</label></li>
                    <li><input type="checkbox" id="storage-1tb-256gb"><label for="storage-1tb-256gb">1TB HDD + 256GB SSD</label></li>
                </ul>
            </div>
            <div class="filter-section">
                <h2>Operating System</h2>
                <ul>
                    <li><input type="checkbox" id="os-windows"><label for="os-windows">Windows</label></li>
                    <li><input type="checkbox" id="os-macos"><label for="os-macos">macOS</label></li>
                    <li><input type="checkbox" id="os-linux"><label for="os-linux">Linux</label></li>
                </ul>
            </div>
        </div>
        <div class="products">
                <div class="product">
                    <img src="/images/computerimg.png" alt="Computer">
                    <h3></h3>
                    <div class="product-details">
                        <p>Brand: Dell</p>
                        <p>Price: $1200</p>
                        <p>RAM: 8GB</p>
                        <p>Processor: Intel Core i5</p>
                        <p>Storage: 256GB SSD</p>
                        <p>Operating System: Windows</p>
                        <button class="btn btn-add">Add to Cart</button>
                    </div>
                </div>
                <div class="product">
                    <img src="/images/computerimg.png" alt="Computer">
                    <h3></h3>
                    <div class="product-details">
                        <p>Brand: Dell</p>
                        <p>Price: $1200</p>
                        <p>RAM: 8GB</p>
                        <p>Processor: Intel Core i5</p>
                        <p>Storage: 256GB SSD</p>
                        <p>Operating System: Windows</p>
                        <button class="btn btn-add">Add to Cart</button>
                    </div>
                </div>
                <div class="product">
                    <img src="/images/computerimg.png" alt="Computer">
                    <h3></h3>
                    <div class="product-details">
                        <p>Brand: Dell</p>
                        <p>Price: $1200</p>
                        <p>RAM: 8GB</p>
                        <p>Processor: Intel Core i5</p>
                        <p>Storage: 256GB SSD</p>
                        <p>Operating System: Windows</p>
                        <button class="btn btn-add">Add to Cart</button>
                    </div>
                </div>
                <div class="product">
                    <img src="/images/computerimg.png" alt="Computer">
                    <h3></h3>
                    <div class="product-details">
                        <p>Brand: Dell</p>
                        <p>Price: $1200</p>
                        <p>RAM: 8GB</p>
                        <p>Processor: Intel Core i5</p>
                        <p>Storage: 256GB SSD</p>
                        <p>Operating System: Windows</p>
                        <button class="btn btn-add">Add to Cart</button>
                    </div>
                </div>
                <div class="product">
                    <img src="/images/computerimg.png" alt="Computer">
                    <h3></h3>
                    <div class="product-details">
                        <p>Brand: Dell</p>
                        <p>Price: $1200</p>
                        <p>RAM: 8GB</p>
                        <p>Processor: Intel Core i5</p>
                        <p>Storage: 256GB SSD</p>
                        <p>Operating System: Windows</p>
                        <button class="btn btn-add">Add to Cart</button>
                    </div>
                </div>
                <div class="product">
                    <img src="/images/computerimg.png" alt="Computer">
                    <h3></h3>
                    <div class="product-details">
                        <p>Brand: Dell</p>
                        <p>Price: $1200</p>
                        <p>RAM: 8GB</p>
                        <p>Processor: Intel Core i5</p>
                        <p>Storage: 256GB SSD</p>
                        <p>Operating System: Windows</p>
                        <button class="btn btn-add">Add to Cart</button>
                    </div>
                </div>
                <div class="product">
                    <img src="/images/computerimg.png" alt="Computer">
                    <h3></h3>
                    <div class="product-details">
                        <p>Brand: Dell</p>
                        <p>Price: $1200</p>
                        <p>RAM: 8GB</p>
                        <p>Processor: Intel Core i5</p>
                        <p>Storage: 256GB SSD</p>
                        <p>Operating System: Windows</p>
                        <button class="btn btn-add">Add to Cart</button>
                    </div>
                </div>
            </div>
    </main>
    @include('partials.footer')
<script src="js/Computerspage.js"> </script>    
</body>
</html>
