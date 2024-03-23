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
                <img src="{{ asset('storage/images/' . $cartItem->productDetail->image) }}" alt="{{ $cartItem->name }}">
                <p>Name: {{ $cartItem->name }}</p>
                <p>Price: {{ $cartItem->price }}</p>
                <p>Quantity:
                    <span class="quantity-control">
                        <button class="decrement" data-product-id="{{ $cartItem->id }}"> - </button>
                        <input type="text" class="quantity-input" value="{{ $cartItem->quantity }}" readonly>
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
                <span id="subtotal-amount-activecart" class="color-price">&nbsp;<span class="size-medium color-base sc-price white-space-nowrap">£<span id="total-price">{{ $totalPrice }}</span></span></span>
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

<script src="js/cart.js"></script>
</body>
</html>
