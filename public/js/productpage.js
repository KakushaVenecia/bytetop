document.addEventListener('DOMContentLoaded', () => {
    const addToCartButtons = document.querySelectorAll('.btn-add');
    console.log(addToCartButtons); 

    addToCartButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            const clickedButton = event.currentTarget;
            const productId = clickedButton.dataset.productId;
            const productName = clickedButton.dataset.productName;
            const productPrice = parseFloat(clickedButton.dataset.productPrice);

            console.log(clickedButton)

            const productDetailsSection = document.getElementById('productDetails');
            productDetailsSection.innerHTML = `
                <p>Product ID: ${productId}</p>
                <p>Product Name: ${productName}</p>
                <p>Product Price: ${productPrice}</p>
            `;

            // Log the product details before sending the request
            console.log(JSON.stringify({
                product_id: productId,
                name: productName,
                price: productPrice,
                quantity: 1 
            }));
            console.log("hherjhekrhkjwhkjwhrekj")
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
            .then(response => {
                if (response.ok) {
                    // Item successfully added to the cart
                    // Now fetch the updated cart count
                alert("here we are")
                } else {
                    // Failed to add item to the cart
                    console.error('Failed to add item to cart.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });

    
});
