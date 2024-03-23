
// function removeCartItem(cartItemId) {
//     const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

 
//     if (confirm("Are you sure?")) {

//         fetch('/cart/delete/' + cartItemId, {
//             method: 'DELETE',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'X-CSRF-TOKEN': csrfToken
//             },
//         })
//         .then(async response => {
//             if (!response.ok) {
//                 throw new Error('Failed to update cart item');
//             }
    
            
//             const cartItemInput = document.getElementById(`cart_item_${cartItemId}`);
    
//             if (cartItemInput) {
//                 cartItemInput.remove();
//             }
    
//             return response.json();
//         })
//         .then(data => {

//             const totalElement = document.getElementById('total_price');
//             if (totalElement) {

//                 totalElement.innerText = `£ ${data.total_price}`;
//             }

//             const products_count = document.getElementById('products_count');
//             if (totalElement) {

//                 products_count.innerText = `${data.count}`;
//             }
//         })
//         .catch(error => {
//             console.error('Error:', error.message);
//         });
//     }
// }

// function updateQuantity(cartItemId) {

//     const quantityInput = document.getElementById(`quantity_${cartItemId}`);

//     let newQuantity = quantityInput.value;

//     const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

//         const payload = {
//             cart_item_id: cartItemId,
//             quantity: newQuantity 
//         };

//         fetch('/cart/update', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'X-CSRF-TOKEN': csrfToken
//             },
//             body: JSON.stringify(payload)
//         })
//         .then(async response => {


//             if (!response.ok) {
//                 throw new Error('Failed to update cart item');
//             }
//             return response.json();
//         })
//         .then(data => {
            
//             quantityInput.value = data.quantity;
            
//             const subtotalElement = document.getElementById('subtotal_'+cartItemId);
//             if (subtotalElement) {

//                 subtotalElement.innerText = `£${data.subtotal}`;
//             }

//             const totalElement = document.getElementById('total_price');
//             if (totalElement) {

//                 totalElement.innerText = `£${data.total_price}`;
//             }

//             const products_count = document.getElementById('products_count');
//             if (totalElement) {

//                 products_count.innerText = `${data.products_count}`;
//             }
    
//             console.log('Quantity updated successfully:', data);
//         })
//         .catch(error => {
//             console.error('Error updating quantity:', error.message);
//         });
// }

document.addEventListener('DOMContentLoaded', function() {
    // Increment and decrement quantity buttons
    document.querySelectorAll('.increment').forEach(function(button) {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-product-id');
            const quantityInput = document.querySelector(`.quantity-input[data-product-id="${productId}"]`);
            const currentQuantity = parseInt(quantityInput.value);
            // Check if the current quantity exceeds the available quantity
            // Replace this condition with your own logic for checking available quantity
            if (currentQuantity < 10) { // Example: Maximum available quantity is 10
                quantityInput.value = currentQuantity + 1;
                // Update total price
                updateTotalPrice();
            } else {
                alert('Maximum quantity reached.');
            }
        });
    });

    document.querySelectorAll('.decrement').forEach(function(button) {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-product-id');
            const quantityInput = document.querySelector(`.quantity-input[data-product-id="${productId}"]`);
            const currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
                // Update total price
                updateTotalPrice();
            }
        });
    });

    // Function to update total price
    function updateTotalPrice() {
        let totalPrice = 0;
        document.querySelectorAll('.item-content .grid-vertical-align').forEach(function(item) {
            const price = parseFloat(item.querySelector('p:nth-child(3)').textContent.split(':')[1].trim());
            const quantity = parseInt(item.querySelector('.quantity-input').value);
            totalPrice += price * quantity;
        });
        document.getElementById('total-price').textContent = totalPrice.toFixed(2); // Update total price display
    }
});
