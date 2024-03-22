@extends('layouts.app')


@section('meta')
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

<div class="container">
    
<section class="section-area">
    
    @if(auth()->check())
        <div class="cart-header">
            <div class="heading">
                <h1>Shopping Basket</h1>
            </div>
            <div class="arow">
                @if ($cartItems->isEmpty())
                    No items selected.
                    <a href="{{ route('products.index') }}">Add items to cart</a>
                @else
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
            <div class="item-content" id="cart_item_{{ $cartItem->id }}">
                    <div class="a-checkbox">
                        <label>
                            <input type="checkbox" name="" value="">
                        </label>
                    </div>

                    <div class="item">
                        <a class="product-link" target="_blank" rel="noopener" href="{{ $cartItem->product->url }}">
                            <img src="{{ asset('storage/images/' . $cartItem->product->image) }}" alt="{{ $cartItem->product->name }}" class="sc-product-image">
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
                                Price : <span class="a-medium a-color-base sc-price sc-white-space-nowrap  a-text-bold">£{{ $cartItem->product->price }}</span>
                                <p class="a-spacing-small "></p>
                                Subtotal : <span id="subtotal_{{ $cartItem->id }}">£{{ number_format($cartItem->product->price * $cartItem->quantity) }}</span> 
                            </div>

                            <div class="item-quantity">
                                <input type="number" min="1" max="10" id="quantity_{{ $cartItem->id }}" value="{{ $cartItem->quantity }}" />
                                <button class="btn btn-primary" onclick="updateQuantity('{{ $cartItem->id }}')">Update</button>
                                <button class="btn btn-danger" onclick="removeCartItem('{{ $cartItem->id }}')"><i class="fa fa-trash"></i></button>
                            </div>

                            
                        </ul>
                    </div>
            </div>
            
        @endforeach

        <div data-name="Subtotals" class="subtotal-activecart">
            <div id="subtotal" class="size-medium number-of-items">
                Count:  <span id="products_count">{{ $total_count }}</span> item
            </div>
            <div  class="size-medium number-of-items">
                Total : <span id="total_price">£ {{ number_format($total_price) }}</span> 
            </div>
            
        </div>

        <div class="">
            <button class="btn btn-secondary" type="button" id="proceed">Proceed to checkout</button>
        </div>

        <div id="sc-active-cart" data-name="Active Cart" class="a-cardui sc-card-style sc-list sc-java-remote-feature celwidget sc-grid-view sc-grid-full-width sc-card-spacing-top-none" data-a-card-type="basic" data-csa-c-id="7ntulj-7bkkll-myg7rt-qbt35a" data-cel-widget="sc-active-cart">
            <div class="a-cardui-body a-scroller-none">
                
            </div>
        </div>
    @else
        No items in cart. Please <a href="{{ route('login') }}">log in</a> to add items to cart.
    @endif

</section>
</div>

<script src="{{ asset('js/cart.js') }}"></script>

@endsection