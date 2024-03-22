document.addEventListener('DOMContentLoaded', function() {
    fetch('/cart/count')
        .then(response => response.text())
        .then(data => {
            // Update the cart count in the DOM
            const cartCountElement = document.getElementById('cartCount');
            cartCountElement.textContent = data || '0'; // If data is empty, show 0
        })
        .catch(error => {
            console.error('Error fetching cart count:', error);
        });

    
        var productsLink = document.getElementById("products-link");
        var productsDropdown = document.getElementById("products-dropdown");

        productsLink.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent the default action of the link
            
            // Toggle the "show" class on the dropdown menu
            productsDropdown.classList.toggle("show");
        });

});


