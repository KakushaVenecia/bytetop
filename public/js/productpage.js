document.addEventListener('DOMContentLoaded', () => {
    try {
        
        const addToCartButtons = document.querySelectorAll('.btn-add');

        addToCartButtons.forEach(button => {
            button.addEventListener('click', () => {
                const productId = button.dataset.productId;
                const productName = button.dataset.productName;
                const productPrice = button.dataset.productPrice;

                // Send AJAX request to add the product to the cart
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

        function updateCartCount() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/cart/count', true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    console.log('Cart count:', response.count);
                }
            };
            xhr.send();
        }

        // Call the function to update cart count on page load
        updateCartCount();
    } catch (error) {
        console.error('An error occurred:', error);
    }

    
});
