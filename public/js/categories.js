document.addEventListener('DOMContentLoaded', function () {
    var addToCartButtons = document.querySelectorAll('.btn-add');

    addToCartButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var productId = this.closest('.product').getAttribute('data-product-id');
            addToCart(productId, 1); 
        });
    });


    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    function addToCart(productId, quantity) {
        var payload = JSON.stringify({
            product_id: productId,
            quantity: quantity
        });
    
        fetch('/cart/add', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken // Set the CSRF token
            },
            body: payload
        })
        .then(function (response) {
            if (response.ok) {
                return response.json();
            }
            throw new Error('Network response was not ok.');
        })
        .then(function (data) {
            // Handle successful response, such as displaying a success message
            console.log('Product added to cart:', data);
        })
        .catch(function (error) {
            // Handle error
            console.error('There was a problem adding the product to cart:', error);
        });
    }
    
    
});
