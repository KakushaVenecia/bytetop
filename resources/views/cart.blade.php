<style>
:root {
	--primary-color: orange;
	--eye-pupil-color: #050505;
	--bg-color: #fff;
	--text-color: #000;
	--fs-heading: 36px;
	--fs-text: 26px;
	--fs-button: 18px;
  --fs-icon: 30px;
	--pupil-size: 30px;
	--eye-size: 80px;
	--button-padding: 15px 30px;

		@media only screen and (max-width: 567px) {
      --fs-heading: 30px;
      --fs-text: 22px;
      --fs-button: 16px;
      --fs-icon: 24px;
	    --button-padding: 12px 24px;
		}
}

body{
    margin: 0px;
    background-color: var(--bg-color);
	color: var(--text-color);
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
.arow2{
    min-height: 100vh;
    width:100%;
    margin-top: 4em;
    background-color: inherit;
    color:#7e0a0a;
    padding: 20px;
    margin-bottom: 4em;
    font-weight: bolder;
}

.item-details img {
    width: 100px; /* Adjust image width as needed */
    margin-right: 20px;
}

.checkout{
    /* background-color: #000;
    width:4rem; */
    margin-top: 4em;
    color:#fff;
    /* padding: 20px; */
    margin-bottom: 4em;
}

.checkout:hover{
    color: darkblue;
}

.btn-primary{
    margin: 4px;
    padding: 20px 5px;
    border-radius: 4px;
    background-color: orange;
    color: #fff !important;
}

.btn-primary:hover{
    color: darkblue;
}
.cart-header1{
    min-height: 50vh;
}

.details {
    text-align: left;
}

.quantity-price {
    text-align: right;
}

.color-switcher {
	position: fixed;
	top: 70px;
	right: 40px;
	background-color: transparent;
	font-size: var(--fs-icon);
	cursor: pointer;
	color: var(--primary-color);
	border: 0;
}


input.quantity-input {
    width: 2.5rem;
    text-align: center;
}

</style>
<body>
@include('partials.navbar')
<div class="container">
    @if($cartItems->isEmpty())
    <div class="cart-header">
        <div class="heading">
            <h1>Shopping Basket</h1>
        </div>
        <div class="arow2">
            @auth
                <p>No items in cart. <a class="btn btn-primary"href="{{ route('landing') }}">Explore Products</a>Go back to explore products.</p>
            @else
                <p>No items in cart. Please <a class="btn btn-primary" href="{{ route('login') }}">Log in</a> to add items to cart.</p>
            @endif
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
            <div class="cart-item" data-product-id="{{ $cartItem->id }}" data-max-quantity="{{ $cartItem->product_count }}" data-price="{{ $cartItem->price }}">
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
            <!-- <p>Subtotal ({{ $cartItems->count() }} items): £ {{ $subtotal }}</p> -->
            <div id="total">Total: £0.00</div>
        </div>
        <div class="checkout" float="right">
            <a href="{{ route('checkout') }}" class="btn btn-primary">Proceed to Checkout</a>
        </div>
    @endif
</div>
</div>
<button class="color-switcher" data-theme-color-switch>&#127769;</button>
@include('partials.footer')
</body>
</html>
<script>
    document.querySelectorAll('.cart-item').forEach(function(item) {
    const maxQuantity = parseInt(item.dataset.maxQuantity);
    const quantityInput = item.querySelector('.quantity-input');
    const availableQuantity = parseInt(item.querySelector('.available-quantity').textContent);
    const price = parseFloat(item.dataset.price);

    item.querySelector('.increment').addEventListener('click', function() {
        let currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity < maxQuantity && currentQuantity < availableQuantity) {
            currentQuantity++;
            quantityInput.value = currentQuantity;
            updateTotal();
        }
    });

    item.querySelector('.decrement').addEventListener('click', function() {
        let currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity > 1) {
            currentQuantity--;
            quantityInput.value = currentQuantity;
            updateTotal();
        }
    });

    quantityInput.addEventListener('input', function() {
        let currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity < 1 || currentQuantity > maxQuantity || currentQuantity > availableQuantity) {
            quantityInput.value = Math.min(Math.max(1, currentQuantity), maxQuantity, availableQuantity);
        }
        updateTotal();
    });
});

function updateTotal() {
    let total = 0;
    let subtotal = 0;
    const cartItems = document.querySelectorAll('.cart-item');
    
    if (cartItems.length === 1) {
        const quantity = parseInt(cartItems[0].querySelector('.quantity-input').value);
        const price = parseFloat(cartItems[0].dataset.price);
        subtotal = quantity * price;
        total = subtotal;
    } else {
        cartItems.forEach(function(item) {
            const quantity = parseInt(item.querySelector('.quantity-input').value);
            const price = parseFloat(item.dataset.price);
            subtotal += quantity * price;
        });
        total = subtotal;
    }

    document.getElementById('total').textContent = 'Total: £' + total.toFixed(2);
    document.getElementById('subtotal').textContent = 'Subtotal: £' + subtotal.toFixed(2);
}
document.addEventListener('DOMContentLoaded', function() {
        updateTotal();
    });

const colorSwitcher = document.querySelector("[data-theme-color-switch]");
let currentTheme = "light";

colorSwitcher.addEventListener("click", function () {
	const root = document.documentElement;

	if (currentTheme == "dark") {
		root.style.setProperty("--bg-color", "#fff");
		root.style.setProperty("--text-color", "#000");
		colorSwitcher.textContent = "\u{1F319}";
		currentTheme = "light";
	} else {
		root.style.setProperty("--bg-color", "#050505");
		root.style.setProperty("--text-color", "#fff");
		colorSwitcher.textContent = "\u{2600}";
		currentTheme = "dark";
	}

	colorSwitcher.setAttribute("data-theme", currentTheme);
});
</script>