<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
</head>
<body>
<section>
<div class="cart-header">
    <div class="heading">
        <h1>Shopping Basket</h1>
    </div>
    <div class="arow">
        @if ($cartItems->isEmpty())
            No items selected.
        @else
            {{-- Display the number of items --}}
            {{ $cartItems->count() }} item(s) selected.
        @endif
        <a id="select-all" class="link-normal" href="#">Select all items</a>
        <span class="itemsprice">Price</span>
    </div>
</div>
<div>
<hr class="white-line">
</div>

@foreach ($cartItems as $cartItem)
    <div class="item-content">
        <div class="grid-vertical-align">
            <div class="a-checkbox">
                <label>
                    <input type="checkbox" name="" value="">
                </label>
            </div>

            <div class="item">
                <a class="product-link" target="_blank" rel="noopener" href="{{ $cartItem->product->url }}">
                    <img src="{{ $cartItem->product->image }}" alt="{{ $cartItem->product->name }}" class="sc-product-image">
                </a>
            </div>

            <div class="item">
                <ul class="list">
                    <li class="product-title">
                        <span class="a-item">
                            <a class="a-link-normal sc-product-link" target="_blank" rel="noopener" href="{{ $cartItem->product->url }}">
                                <span class="a-size-base-plus a-color-base sc-product-title sc-grid-item-product-title">
                                    <span class="item-product-title " data-a-word-break="normal" data-a-max-rows="2" data-a-overflow-marker="&amp;hellip;" style="line-height: 1.3em !important; max-height: 2.6em;" data-a-updated="true">
                                        <span class="detils">{{ $cartItem->product->name }}</span>
                                    </span>
                                </span>
                            </a>
                        </span>
                    </li>

                    <div class="item-price">
                        <span class="a-medium a-color-base sc-price sc-white-space-nowrap  a-text-bold">£{{ $cartItem->product->price }}</span>
                        <p class="a-spacing-small"></p>
                    </div>

                    {{-- Additional product details and actions --}}
                    {{-- Add your dynamic content here --}}
                </ul>
            </div>
        </div>
    </div>
    <div>
        <hr class="white-line">
    </div>
@endforeach

<div data-name="Subtotals" class="subtotal-activecart">
    <span id="subtotal" class="size-medium number-of-items">
        {{-- Display the total number of items --}}
        Subtotal ({{ $cartItems->count() }} item):
    </span>
    {{-- Display the total price --}}
    <span id="subtotal-amount-activecart" class="color-price">&nbsp;<span class="size-medium color-base sc-price white-space-nowrap">£{{ $totalPrice }}</span></span>
</div>

<div class="checkout">
    <button type="button" id="proceed">Proceed to checkout</button>
</div>

<div id="sc-active-cart" data-name="Active Cart" class="a-cardui sc-card-style sc-list sc-java-remote-feature celwidget sc-grid-view sc-grid-full-width sc-card-spacing-top-none" data-a-card-type="basic" data-csa-c-id="7ntulj-7bkkll-myg7rt-qbt35a" data-cel-widget="sc-active-cart">
    <div class="a-cardui-body a-scroller-none">
        {{-- Add your dynamic content here --}}
    </div>
</div>

</section>

<script src="{{ asset('js/cart.js') }}"></script>

</body>
</html>
