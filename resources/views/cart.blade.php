<style>

    *{
        margin: 0px;
    
    }
    .container{
        width:60%;
        margin:auto;

    }
    .cart-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}
.heading{
    text-align: center;
    margin-bottom: 2rem;
    color: orange;
}
.item-details {
    display: flex;
    align-items: center;
}

.item-details img {
    width: 100px; /* Adjust image width as needed */
    margin-right: 20px;
}

.details {
    text-align: left;
}

.quantity-price {
    text-align: right;
}

</style>
@include('partials.navbar')
<div class="container">
    @if($cartItems->isEmpty())
        <div class="cart-header">
            <div class="heading">
                <h1>Shopping Basket</h1>
            </div>
            <div class="arow">
                No items in cart. Please <a href="{{ route('login') }}">log in</a> to add items to cart.
            </div>
        </div>
    @else
        <div class="cart-header">
            <div class="heading">
                <h1>Shopping Basket</h1>
            </div>
            <div class="arow">
                <p>Total items in cart: {{ $cartItems->count() }}</p>
            </div>
        </div>
        <div>
            <hr class="white-line">
        </div>
        <div class="item-content">
            @foreach($cartItems as $cartItem)
            <div class="cart-item" data-product-id="{{ $cartItem->id }}" data-max-quantity="{{ $cartItem->product_count }}">
                <div class="item-details">
                    <img src="{{ asset('storage/images/' . $cartItem->image) }}" alt="{{ $cartItem->name }}">
                    <div class="details">
                        <p>Name: {{ $cartItem->name }}</p>
                        <p>Price: £ {{ $cartItem->price }}</p>
                        <p>Available Items: <span class="available-quantity">{{ $cartItem->product_count }}</span></p>
                    </div>
                </div>
                <div class="quantity-price">
                    <p>Quantity:
                        <span class="quantity-control">
                            <!-- Increment and decrement buttons -->
                            <button class="decrement"> - </button>
                            <input type="text" class="quantity-input" value="{{ $cartItem->quantity }}" readonly>
                            <button class="increment"> + </button>
                        </span>
                    </p>
                    <div class="action-links">
                        <form action="{{ route('cart.delete', $cartItem->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div>
            <hr class="white-line">
        </div>
        <div>
            <p>Subtotal ({{ $cartItems->count() }} items): £ {{ $subtotal }}</p>
        </div>
        <div class="checkout" float="right">
            <button href="{{ route('checkout') }}">Proceed to checkout</button>
        </div>
    @endif
</div>
</div>
<button class="color-switcher" data-theme-color-switch>&#127769;</button>
@include('partials.footer')
<script>
    document.querySelectorAll('.cart-item').forEach(function(item) {
    const maxQuantity = parseInt(item.dataset.maxQuantity);
    const quantityInput = item.querySelector('.quantity-input');
    const availableQuantity = item.querySelector('.available-quantity').textContent;

    item.querySelector('.increment').addEventListener('click', function() {
        let currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity < maxQuantity) {
            currentQuantity++;
            quantityInput.value = currentQuantity;
        }
    });

    item.querySelector('.decrement').addEventListener('click', function() {
        let currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity > 1) {
            currentQuantity--;
            quantityInput.value = currentQuantity;
        }
    });
});
</script>

