@extends('frontend.layouts.master')
@section('title','Cart Page')
@section('main-content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{('home')}}">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="">Cart</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th>
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody id="cart_item_list">
							<form action="{{route('cart.update')}}" method="POST">
								@csrf
								@if(Helper::getAllProductFromCart())
									@foreach(Helper::getAllProductFromCart() as $key=>$cart)
										<tr>
											@php
											$photo=explode(',',$cart->product['photo']);
											@endphp
											<td class="image" data-title="No"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></td>
											<td class="product-des" data-title="Description">
												<p class="product-name"><a href="{{route('product-detail',$cart->product['slug'])}}" target="_blank">{{$cart->product['title']}}</a></p>
												<p class="product-des">{!!($cart['summary']) !!}</p>
											</td>
											<td class="price" data-title="Price"><span>${{number_format($cart['price'],2)}}</span></td>
											<td class="qty" data-title="Qty"><!-- Input Order -->
												<div class="input-group">
													<div class="button minus">
														<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[{{$key}}]">
															<i class="ti-minus"></i>
														</button>
													</div>
													<input type="text" name="quant[{{$key}}]" class="input-number"  data-min="1" data-max="100" value="{{$cart->quantity}}">
													<input type="hidden" name="qty_id[]" value="{{$cart->id}}">
													<div class="button plus">
														<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[{{$key}}]">
															<i class="ti-plus"></i>
														</button>
													</div>
												</div>
												<!--/ End Input Order -->
											</td>
											<td class="total-amount cart_single_price" data-title="Total"><span class="money">${{$cart['amount']}}</span></td>

											<td class="action" data-title="Remove"><a href="{{route('cart-delete',$cart->id)}}"><i class="ti-trash remove-icon"></i></a></td>
										</tr>
									@endforeach
									<track>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td class="float-right">
											<button class="btn float-right" type="submit">Update</button>
										</td>
									</track>
								@else
										<tr>
											<td class="text-center">
												There are no any carts available. <a href="{{route('product-grids')}}" style="color:blue;">Continue shopping</a>

											</td>
										</tr>
								@endif

							</form>
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
									<div class="coupon">
									<form action="{{route('coupon-store')}}" method="POST">
											@csrf
											<input name="code" placeholder="Enter Your Coupon">
											<button class="btn">Apply</button>
										</form>
									</div>
									{{-- <div class="checkbox">`
										@php
											$shipping=DB::table('shippings')->where('status','active')->limit(1)->get();
										@endphp
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox" onchange="showMe('shipping');"> Shipping</label>
									</div> --}}
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">Cart Subtotal<span>${{number_format(Helper::totalCartPrice(),2)}}</span></li>

										@if(session()->has('coupon'))
										<li class="coupon_price" data-price="{{Session::get('coupon')['value']}}">You Save<span>${{number_format(Session::get('coupon')['value'],2)}}</span></li>
										@endif
										@php
											$total_amount=Helper::totalCartPrice();
											if(session()->has('coupon')){
												$total_amount=$total_amount-Session::get('coupon')['value'];
											}
										@endphp
										@if(session()->has('coupon'))
											<li class="last" id="order_total_price">You Pay<span>${{number_format($total_amount,2)}}</span></li>
										@else
											<li class="last" id="order_total_price">You Pay<span>${{number_format($total_amount,2)}}</span></li>
										@endif
									</ul>
									<div class="button5">
										<a href="{{route('checkout')}}" class="btn">Checkout</a>
										<a href="{{route('product-grids')}}" class="btn">Continue shopping</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->

	<!-- Start Shop Services Area  -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->

	<!-- Start Shop Newsletter  -->
	@include('frontend.layouts.newsletter')
	<!-- End Shop Newsletter -->

@endsection
@push('styles')
	<style>
		li.shipping{
			display: inline-flex;
			width: 100%;
			font-size: 14px;
		}
		li.shipping .input-group-icon {
			width: 100%;
			margin-left: 10px;
		}
		.input-group-icon .icon {
			position: absolute;
			left: 20px;
			top: 0;
			line-height: 40px;
			z-index: 3;
		}
		.form-select {
			height: 30px;
			width: 100%;
		}
		.form-select .nice-select {
			border: none;
			border-radius: 0px;
			height: 40px;
			background: #f6f6f6 !important;
			padding-left: 45px;
			padding-right: 40px;
			width: 100%;
		}
		.list li{
			margin-bottom:0 !important;
		}
		.list li:hover{
			background:#F7941D !important;
			color:white !important;
		}
		.form-select .nice-select::after {
			top: 14px;
		}
	</style>
@endpush
@push('scripts')
	<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
	<script>
		$(document).ready(function() { $("select.select2").select2(); });
  		$('select.nice-select').niceSelect();
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') );
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0;
				// alert(coupon);
				$('#order_total_price span').text('$'+(subtotal + cost-coupon).toFixed(2));
			});

		});

	</script>

@endpush









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <style>
        
        .container {
            max-width: 1200px; 
            margin: 0 auto; 
            padding: 0 20px;
        }
    </style>
</head>
<body>
<div class="container">
    @include('partials.navbar')
    <section>
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
                    <p>Quantity: {{ $cartItem->quantity }}</p>
                    <div class="action-links">
                        <span class="action-quantity" data-old-value="1" data-action="quantity">
                            <div class="quantity">
                                <div class="quantity_align">
                                    <button class="decrement" disabled=""> - </button>
                                    <div class="number_align">
                                        <input type="text" class="numberstatus" value="{{ $cartItem->quantity }}" aria-autocomplete="list">
                                    </div>
                                    <button class="increment"> + </button>
                                </div>
                            </div>
                        </span>
                        <span data-action="delete" data-feature-id="delete" class="a-size-small action-delete">
                            <span class="a-declarative" data-action="sc-item-action" data-csa-c-type="widget" data-csa-c-func-deps="aui-da-sc-item-action" data-sc-item-action="{&quot;action&quot;:&quot;delete&quot;,&quot;itemID&quot;:&quot;e152fe26-1561-4ce4-814a-25a9581bc240&quot;,&quot;itemType&quot;:&quot;active&quot;,&quot;isFresh&quot;:0,&quot;isWishListItem&quot;:0}" data-csa-c-id="ftwnvr-nd2a2j-g1sujt-b32anf">
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
                </span>
                {{-- <span id="subtotal-amount-activecart" class="color-price">&nbsp;<span class="size-medium color-base sc-price white-space-nowrap">£{{ $cartItem->price }}</span></span> --}}
            </div>
            <div class="checkout">
                <button type="button" id="proceed">Proceed to checkout</button>
            </div>
            <div id="sc-active-cart" data-name="Active Cart" class="a-cardui sc-card-style sc-list sc-java-remote-feature celwidget sc-grid-view sc-grid-full-width sc-card-spacing-top-none" data-a-card-type="basic" data-csa-c-id="7ntulj-7bkkll-myg7rt-qbt35a" data-cel-widget="sc-active-cart">
                <div class="a-cardui-body a-scroller-none">
                    
                </div>
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
