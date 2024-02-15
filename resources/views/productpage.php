<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Categories</title>
    <link rel="stylesheet" href="css/productpage.css">
</head>
<body>
    <header>
        <h1>Product Categories</h1>
    </header>

    <main>
        <div id="categories">
            <div class="category-section">
                <h2>CATEGORIES</h2>
                <ul>
                    <li><a href="#" onclick="showProducts('computers')">Computers</a></li>
                    <li><a href="#" onclick="showProducts('laptops')">Laptops</a></li>
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
                    <li><input type="checkbox" id="brand-abc"><label for="brand-abc">ABC</label></li>
                    <li><input type="checkbox" id="brand-xyz"><label for="brand-xyz">XYZ</label></li>
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

            <div class="category-section">
                <h2>PROCESSOR</h2>
                <ul>
                    <li><input type="checkbox" id="processor-core-i5"><label for="processor-core-i5">Core i5</label></li>
                    <li><input type="checkbox" id="processor-core-i3"><label for="processor-core-i3">Core i3</label></li>
                    <li><input type="checkbox" id="processor-core-i7"><label for="processor-core-i7">Core i7</label></li>
                    <li><input type="checkbox" id="processor-ryzen-7"><label for="processor-ryzen-7">Ryzen 7 Quad Core</label></li>
                </ul>
            </div>

        </div>

        <div id="products">
        <div class="breadcrumb">
            <p><a href="#">Home</a> > <a href="#" onclick="showProducts('computers')">Computers</a> > <a href="#" onclick="showProducts('laptops')">Laptops</a></p>
        </div>


            <div class="product-container" id="productContainer">
                
            </div>
        </div>
    </main>

    <script src="js/productpage.js"></script>
</body>
</html>
