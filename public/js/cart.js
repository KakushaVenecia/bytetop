
function removeCartItem(cartItemId) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

 
    if (confirm("Are you sure?")) {

        fetch('/cart/delete/' + cartItemId, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
        })
        .then(async response => {
            if (!response.ok) {
                throw new Error('Failed to update cart item');
            }
    
            // Corrected variable name
            const cartItemInput = document.getElementById(`cart_item_${cartItemId}`);
    
            if (cartItemInput) {
                cartItemInput.remove();
            }
    
            return response.json();
        })
        .then(data => {

            const totalElement = document.getElementById('total_price');
            if (totalElement) {

                totalElement.innerText = `£ ${data.total_price}`;
            }

            const products_count = document.getElementById('products_count');
            if (totalElement) {

                products_count.innerText = `${data.count}`;
            }
        })
        .catch(error => {
            console.error('Error:', error.message);
        });
    }
}

function updateQuantity(cartItemId) {

    const quantityInput = document.getElementById(`quantity_${cartItemId}`);

    let newQuantity = quantityInput.value;

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        const payload = {
            cart_item_id: cartItemId,
            quantity: newQuantity // Set quantity to 1
        };

        fetch('/cart/update', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify(payload)
        })
        .then(async response => {


            if (!response.ok) {
                throw new Error('Failed to update cart item');
            }
            return response.json();
        })
        .then(data => {
            // Update the quantity input value in case the server modified it
            quantityInput.value = data.quantity;
            // Update the subtotal element
            const subtotalElement = document.getElementById('subtotal_'+cartItemId);
            if (subtotalElement) {

                subtotalElement.innerText = `£${data.subtotal}`;
            }

            const totalElement = document.getElementById('total_price');
            if (totalElement) {

                totalElement.innerText = `£${data.total_price}`;
            }

            const products_count = document.getElementById('products_count');
            if (totalElement) {

                products_count.innerText = `${data.products_count}`;
            }
    
            console.log('Quantity updated successfully:', data);
        })
        .catch(error => {
            console.error('Error updating quantity:', error.message);
        });
}