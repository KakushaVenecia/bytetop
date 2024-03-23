document.querySelectorAll('.btn-add').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Get product details from data attribute
        const productName = this.getAttribute('data-product-name');
        const productQuantity = this.getAttribute('data-product-quantity');
        const productPrice = this.getAttribute('data-product-price');

        // Perform AJAX request to add item to cart
        fetch('/cart/add', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token
            },
            body: JSON.stringify({
                product_name: productName,
                quantity: productQuantity,
                price: productPrice
            })
        })
        .then(response => {
            if (response.ok) {
                // Show success flash message
                showFlashMessage('Item added to cart successfully', 'success');
            } else {
                // Show error flash message
                showFlashMessage('Failed to add item to cart', 'error');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            // Show error flash message
            showFlashMessage('An error occurred. Please try again later', 'error');
        });
    });
});

function showFlashMessage(message, type) {
    // Create a flash message element
    const flashMessage = document.createElement('div');
    flashMessage.classList.add('flash-message', type);
    flashMessage.textContent = message;

    // Append the flash message to the document body
    document.body.appendChild(flashMessage);

    // Remove the flash message after a certain duration (e.g., 5 seconds)
    setTimeout(() => {
        flashMessage.remove();
    }, 5000);
}
