document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.btn-add');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.dataset.productId;
            console.log('Button clicked. Product ID:', productId); // Log the product ID
            addToCart(productId);
        });
    });

    function addToCart(productId) {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        const payload = {
            product_id: productId,
            quantity: 1 // Set quantity to 1
        };

        fetch('/cart/add', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify(payload)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to add item to cart.');
            }
            return response.json();
        })
        .then(data => {
            // Handle success response, e.g., update cart count in navbar
            console.log('Item added to cart:', data);
        })
        .catch(error => {
            console.error('Error adding item to cart:', error.message);
        });
    }
});
