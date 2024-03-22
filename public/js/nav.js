document.addEventListener('DOMContentLoaded', function() {
    fetch('/cart/count')
        .then(response => response.text())
        .then(data => {
            
            const cartCountElement = document.getElementById('cartCount');
            cartCountElement.textContent = data || '0'; 
        })
        .catch(error => {
            console.error('Error fetching cart count:', error);
        });

    
        var productsLink = document.getElementById("products-link");
        var productsDropdown = document.getElementById("products-dropdown");

        productsLink.addEventListener("click", function(event) {
            event.preventDefault(); 
            productsDropdown.classList.toggle("show");
        });

});


