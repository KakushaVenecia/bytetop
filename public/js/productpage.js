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
            if (data.error) {
                // Handle case where item is already in the cart
                alert(data.error);
            } else {
                // Handle success response, e.g., update cart count in navbar
                updateCartCount(data.cart_count);
                console.log('Item added to cart:', data);
            }
        })
        .catch(error => {
            console.error('Error adding item to cart:', error.message);
        });
    }

    function updateCartCount(count) {
        const cartCountElement = document.getElementById('cartCount');
        if (cartCountElement) {
            cartCountElement.textContent = count;
        }
    }
});
