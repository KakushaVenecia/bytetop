<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>

<style>
 .tabs {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin-bottom: 20px;
        }

        .tablinks {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            outline: none;
            background-color: #f2f2f2;
            border-radius: 5px 5px 0 0;
        }

        .tablinks.active {
            background-color: #ddd;
        }

        .tabcontent {
            width: 50%;
            display: inline-block;
            vertical-align: top;
            background-color: darkblue;
            padding: 20px;
            border-radius: 0 0 5px 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: orange;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            float: right;
        }

        button:hover {
            background-color: #45a049;
        }
</style>
<body>

@include('partials.navbar')

<header>
    <div class="container">
      <div class="navigation">
        <a href="{{ route('cart') }}" class="btn btn add"><i class="fa-solid fa-arrow-left"></i> Go back to Cart</a>
      </div>
      <div class="notification">
        Complete Your Purchase
      </div>
    </div>
</header>
<section class="content">
  <div class="container">
      <form action="{{ route('createorder') }}" method="POST">
          @csrf 
          <div class="details shadow">
              @foreach(session('cart.items', []) as $item)
                  <div class="details__item" style="display: flex; width:200px; height:200px; padding:2em">
                      <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" style="width: 100px;">
                      <div class="item__details" style="display: flex; flex-direction: column; justify-content: center;">
                          <p>Product Name:</p>
                          <div class="item__title">{{ $item['name'] }}</div>
                          <p>Product Price:</p>
                          <div class="item__price">Price: £{{ $item['price'] }}</div>
                      </div>
                  </div>
              @endforeach
              <div class="total" style="margin-top: 20px; text-align:center;">Total Price: £{{ number_format(session('cart.total_price', 0), 2) }}</div>
          </div>
          <button type="submit">Place Order</button>
      </form>
  </div>
</section>
