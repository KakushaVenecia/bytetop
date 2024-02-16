function showProducts(category) {
    // Fetch and display products based on the category
    if (category === 'all') {
        // Show all products
        document.querySelectorAll('.product').forEach(function(product) {
            product.style.display = 'block';
        });
    } else {
        // Hide all products
        document.querySelectorAll('.product').forEach(function(product) {
            product.style.display = 'none';
        });
        
        // Show products matching the selected category
        document.querySelectorAll('.product[data-category="' + category + '"]').forEach(function(product) {
            product.style.display = 'block';
        });
    }
}

function updatePriceLabel(value) {
    const priceLabel = document.getElementById('priceLabel');
    priceLabel.textContent = `£0 to £${value}`;
    }