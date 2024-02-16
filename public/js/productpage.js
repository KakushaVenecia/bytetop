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

document.addEventListener('DOMContentLoaded', () => {
    const addToCartButtons = document.querySelectorAll('.btn-add');
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const productId = button.dataset.productId;
            const productName = button.dataset.productName;
            const productPrice = button.dataset.productPrice;

            fetch('/cart/add', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    product_id: productId,
                    name: productName,
                    price: productPrice,
                    quantity: 1 // You can adjust this as needed
                })
            })
            .then(response => response.json())
            .then(data => {
                console.log(data); // Log the response for debugging
                // Update the cart count on the UI
                // You can update the count based on the response from the server
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
});