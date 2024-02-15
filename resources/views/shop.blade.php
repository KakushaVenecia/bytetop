<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
</head>
<body>
    @include('partials.navbar')
<div class="product-grid">
    @foreach ($products as $product)
        <div class="product-card"> 
            <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
            <div class="product-details">
                <h2 class="product-name">{{ $product->name }}</h2>
                <p class="product-description">{{ $product->description }}</p>
                <p class="product-price">${{ $product->price }}</p>
                <button class="btn btn-add" data-product-id="{{ $product->id }}">Add to Cart</button>
            </div>
        </div>
    @endforeach
</div>
    @include('partials.footer')
    <script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all "Add to Cart" buttons
        var addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
        // Add click event listener to each button
        addToCartButtons.forEach(function(button) {
            button.addEventListener('click', function(event) {
                // Prevent default form submission
                event.preventDefault();

                // Get the product ID from the button's data attribute
                var productId = button.getAttribute('data-product-id');

                // Send AJAX request to add the product to the cart
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/cart/add', true);
                xhr.setRequestHeader('Content-Type', 'application/json');
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        // Handle the response from the serve


                        if (xhr.status === 200) {
                            // Product added successfully
                            alert('Product added to cart!');
                        } else {
                            // Failed to add product
                            alert('Failed to add product to cart.');
                        }
                    }
                };
                xhr.send(JSON.stringify({ productId: productId }));
            });
        });

        function updateCartCount() {
    $.ajax({
        url: '/cart/count',
        type: 'GET',
        success: function(response) {
            $('.cart-count').text(response.count);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}

// Call the function to update cart count on page load
$(document).ready(function() {
    updateCartCount();
});
    });
</script>


    </script>
</body>

</html>
