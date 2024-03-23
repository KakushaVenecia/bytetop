<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<title>Cart</title>
@include('partials.navbar')
<div class="container">
    @if(auth()->check())
        <div class="cart-header">
            <div class="heading">
                <h1>Shopping Basket</h1>
            </div>
            <div class="arow">
                No items selected.
                <a id="select-all" class="link-normal" href="#">Select all items</a>
                <span class="itemsprice">Price</span>
            </div>
        </div>
        <div>
            <hr class="white-line">
        </div>
        <div class="item-content">
            @foreach($cartItems as $cartItem)
            <div class="grid-vertical-align">
                <img style="width:70px height:70px" src="{{ asset('storage/images/' . $cartItem->productDetail->image) }}" alt="{{ $cartItem->name }}">
                <p>Name: {{ $cartItem->name }}</p>
                <p>Price: {{ $cartItem->price }}</p>
                <p>Quantity:
                    <span class="quantity-control">
                        <button class="decrement" data-product-id="{{ $cartItem->id }}"> - </button>
                        <input type="text" class="quantity-input" value="{{ $cartItem->quantity }}">
                        <button class="increment" data-product-id="{{ $cartItem->id }}"> + </button>
                    </span>
                </p>
                <div class="action-links">
                    <span data-action="delete" data-feature-id="delete" class="a-size-small action-delete">
                        <span class="a-declarative" data-action="sc-item-action">
                            <input name="submit.delete.e152fe26-1561-4ce4-814a-25a9581bc240" value="Delete" data-action="delete" aria-label="Delete HP Laptop PC 15s-fq5021sa | Intel Core i5-1235U Processor | 8GB RAM | 256GB SSD | Intel UHD Graphics | 15.6 inch Full HD 16:9 display | Windows 11 Home | Natural Silver" type="submit" class="a-color-link">
                        </span>
                    </span>
                </div>
            </div>
            @endforeach
        </div>
        <div>
            <hr class="white-line">
        </div>
        <div data-name="Subtotals" class="subtotal-activecart">
            <span id="subtotal" class="size-medium number-of-items">
                Subtotal ({{ $cartItems->count() }} item):
                {{-- <span id="subtotal-amount-activecart" class="color-price">&nbsp;<span class="size-medium color-base sc-price white-space-nowrap">£<span id="total-price">{{ $totalPrice }}</span></span></span> --}}
            </span>
        </div>
        <div class="checkout">
            <button type="button" id="proceed">Proceed to checkout</button>
        </div>
        <div id="sc-active-cart" data-name="Active Cart" class="a-cardui sc-card-style sc-list sc-java-remote-feature celwidget sc-grid-view sc-grid-full-width sc-card-spacing-top-none" data-a-card-type="basic">
            <div class="a-cardui-body a-scroller-none"></div>
        </div>
    @else
        <div class="cart-header">
            <div class="heading">
                <h1>Shopping Basket</h1>
            </div>
            <div class="arow">
                No items in cart. Please <a href="{{ route('login') }}">log in</a> to add items to cart.
            </div>
        </div>
    @endif
</section>
</div>
<!-- Your HTML code remains unchanged -->

<script>
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
    </script>
    </body>
    </html>
    