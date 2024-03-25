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
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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

    </div>
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
  

    
    <div class="discount"></div>

  <div class="container1">
    <div class="tabs">
      <button class="tablinks active" onclick="openTab(event, 'shipping')">Shipping Details</button>
      <button class="tablinks" onclick="openTab(event, 'payment')" style="display: none;">Payment</button>
  </div>

  <div id="shipping" class="tabcontent" style="display: block;">
      <h2>Shipping Information</h2>
      <form id="shippingForm">
          <div class="title"> Name</div>
          <input type="text" id="name" name="name" placeholder="Enter your name" value="{{ session('user_name') }}">

          <div class="title">Phone Number</div>
          <input type="text" id="phone" name="phone" placeholder="Enter your phone number">

          <div class="title">Postcode</div>
          <input type="text" id="postcode" name="postcode" placeholder="Enter your postcode">

          <div class="title">Address</div>
          <input type="text" id="address" name="address" placeholder="Enter your address">

          <div class="title">Town/City</div>
          <input type="text" id="city" name="city" placeholder="Enter your town/city">

          <button type="button" onclick="nextTab()">Next</button>
      </form>
  </div>

  <div id="payment" class="tabcontent" style="display: none;">
      <h2>Payment Information</h2>
      <form id="paymentForm">
          <div class="input-group">
              <label for="card-number">Card Number</label>
              <input type="text" id="card_number" name="card_number" placeholder="•••• •••• •••• ••••">
          </div>
          <div class="input-group multi-input">
              <div>
                  <label for="expiry-date">Expiry Month</label>
                  <select name="expiry_month" id="expiry_month">
                      @for ($month = 1; $month <= 12; $month++)
                          <option {{ $month == date('m') ? 'selected' : '' }}>
                              {{ str_pad($month, 2, '0', STR_PAD_LEFT) }}
                          </option>
                      @endfor
                  </select>
                  <label for="expiry-year">Expiry Year</label>
                  <select name="expiry_year" id="expiry_year">
                      @php
                          $currentYear = date('Y');
                          $endYear = $currentYear + 10; 
                      @endphp
                      @for ($year = $currentYear; $year <= $endYear; $year++)
                          <option {{ $year == $currentYear ? 'selected' : '' }}>{{ $year }}</option>
                      @endfor
                  </select>
              </div>
              <div>
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="•••">
              </div>
               <div>
                  <label for="card-holder">Card Holder Name</label>
                  <input type="text4" id="card-holder" name="name" placeholder="Full Name">
              </div>
              <div class="actions">
                <form method="POST" action="{{ route('createorder') }}">
                  @csrf
                  <!-- Other form fields -->
                  <button type="submit" class="btn ">Place Your Order</button>
              </form>

            </div>
  
    </section>

    @include('partials.footer')
    <script>
      function openTab(evt, tabName) {
          var tabcontent = document.getElementsByClassName("tabcontent");
          for (var i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
          }
          var tablinks = document.getElementsByClassName("tablinks");
          for (var i = 0; i < tablinks.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(tabName).style.display = "block";
          evt.currentTarget.className += " active";
      }
  
      function nextTab() {
          openTab(event, 'payment');
          document.getElementsByClassName("tablinks")[0].style.display = "none";
          document.getElementsByClassName("tablinks")[1].style.display = "block";
      }
  </script>
 

</body>
</html>