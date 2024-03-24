<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/orderspage.css">
    <script src="https://kit.fontawesome.com/4d0aa3dbc2.js" crossorigin="anonymous"></script>

    
</head>
@include('partials.navbar')

<body>
<header>
  <h1>My Orders</h1>
  <p>View all of your PENDING orders here.</p>
</header>
<div class="container">
  <div class="heading">
    <div class="odetails-1">
      <p><b>Order</b></p>
      <p>#R86F854G7665</p>
    </div>
    <div class="odetails-2">
      <p>Order Placed: Mon 25th Mar 2024</p>
    </div>

    <button id="track-order-btn" onclick="window.location.href = 'http://127.0.0.1:8000/trackorder';">
        <i class="fa-solid fa-truck"></i>
        <p>TRACK ORDER</p>
    </button>

  </div>

  <hr>

  <div class="card-container">
    <div class="card">
      <div class="img">
        <img src="/images/Hp_Laptop.jpeg">
      </div>
      <div class="parent">
        <div class="content">
          <div class="details-1">
            <h1>HP Laptop PC 15s-fq5021sa | Intel Core i5-1235U Processor | 8GB RAM | 256GB SSD | Intel UHD Graphics | 15.6 inch Full HD 16:9 display | Windows 11 Home | Natural Silver</h1>
          </div>
          <div class="details-2">
            <p>Size Name: 15.6 inch</p>
            <p>color: Natural Silver</p>
            <p>Qty: 1</p>
            <p><b>Price: £449.99</b></p>
          </div>
        </div>
        <div class="status">
          <div class="sec1">
            <p>Status</p>
            <h2>In-Transit</h2>
          </div>
          <div class="sec2">
            <p>Delivery Expected By</p>
            <h3>02 April 2024</h3>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>
  <div class="card-container">
    <div class="card">
      <div class="img">
        <img src="/images/Lenovo_Laptop.jpg">
      </div>
      <div class="parent">
        <div class="content">
          <div class="details-1">
            <h1>Lenovo IdeaPad Slim 5 | 16 inch WUXGA Laptop | Intel Core i5-12450H | 16GB RAM | 1TB SSD |Windows 11 Home | Abyss Blue</h1>    
          </div>
          <div class="details-2">
          <p>Size Name: 16 inches</p>
            <p>color: Abyss Blue</p>
            <p>Qty: 1</p>
            <p><b>Price: £559.99</b></p>
          </div>
        </div>
        <div class="status">
          <div class="sec1">
            <p>Status</p>
            <h2>In-Transit</h2>
          </div>
          <div class="sec2">
            <p>Delivery Expected By</p>
            <h3>02 April 2024</h3>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>
  <div class="card-bottom">
    <button>✖ CANCEL ORDER</button>
    <h1>Total:  £1009.98</h1>
  </div>
</div>

<hr>

<header>
  <h1>Returns</h1>
  <p>View all of your RETURN orders here.</p>
</header>
<div class="container">
  <div class="heading">
    <div class="odetails-1">
      <p><b>Order</b></p>
      <p>#R86F854G7444</p>
    </div>
    <div class="odetails-2">
      <p>Order Placed: Fri 12th Jan 2024</p>
    </div>
  </div>
  <hr>
  <div class="card-container">
    <div class="card">
      <div class="img">
        <img src="/images/img5.jpeg">
      </div>
      <div class="parent">
        <div class="content">
          <div class="details-1">
            <h1>ASUS Laptop Vivobook 15 E1504FA | 15.6 inch Full HD Laptop | AMD Ryzen 5-7520U | 16GB RAM | 512GB SSD | Windows 11 | Wi-Fi 6E</h1>
          </div>
          <div class="details-2">
            <p>Size Name:&nbsp;15.6 Full HD</p>
            <p>color:&nbsp;Natural Silver</p>
            <p>Qty: 1</p>
            <p><b>Price: £399.99</b></p>
          </div>
        </div>
        <div class="status">
          <div class="sec1">
            <p>Status</p>
            <h2>Returned</h2>
          </div>
          <div class="sec2">
            <p>Returned on</p>
            <h3>20 Jan 2024</h3>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>

  <div class="card-bottom">
    
    <h1>Total:  £399.99</h1>
  </div>
</div>




<hr>


<header>
  <h1>Dispatched</h1>
  <p>View all of your DISPATCHED orders here.</p>
</header>

<div class="container">
  <div class="heading">
    <div class="odetails-1">
      <p><b>Order</b></p>
      <p>#R86F854G7999</p>
    </div>
    <div class="odetails-2">
      <p>Order Placed: Tue 5th DEC 2023</p>
    </div>
  </div>
  <hr>
  <div class="card-container">
    <div class="card">
      <div class="img">
        <img src="/images/Acer_Laptop.webp">
      </div>
      <div class="parent">
        <div class="content">
          <div class="details-1">
            <h1>Acer Aspire 5 A515-57 | 15.6-inch Laptop | Intel Core i7-12650H | 16 GB RAM | 512 GB SSD | 1920 x 1080 Display | Windows 11 | Iron</h1>
          </div>
          <div class="details-2">
            <p>Size Name:&nbsp;15.6 inch</p>
            <p>color:&nbsp;Iron</p>
            <p>Qty: 1</p>
            <p><b>Price: £672.99</b></p>
          </div>
        </div>
        <div class="status">
          <div class="sec1">
            <p>Status</p>
            <h2>Delivered</h2>
          </div>
          <div class="sec2">
            <p>Delivered on</p>
            <h3>15 Dec 2023</h3>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>
  <div class="card-bottom">
    <h1>Total:  £672.99</h1>
  </div>
</div>


<hr>


<header>
  <h1>Cancelled Orders</h1>
  <p>View all of your CANCELLED orders here.</p>
</header>

<div class="container">
  <div class="heading">
    <div class="odetails-1">
      <p><b>Order</b></p>
      <p>#R86F854G7665</p>
    </div>
    <div class="odetails-2">
      <p>Order Placed: Tue 5th SEP 2023</p>
    </div>
  </div>
  <hr>
  <div class="card-container">
    <div class="card">
      <div class="img">
        <img src="/images/DellPC.webp">
      </div>
      <div class="parent">
        <div class="content">
          <div class="details-1">
            <h1>Dell Optiplex i7 2nd - #110SE | Cpu: Intel Core i7 2600 - 3.10Ghz | Ram: 16GB | Hard-Drive- 1TB HDD | Windows 10 64 Bit Pre Installed</h1>
          </div>
          <div class="details-2">
    
            <p>color:&nbsp;Iron</p>
            <p>Qty: 1</p>
            <p><b>Price: £139.99</b></p>
          </div>
        </div>
        <div class="status">
          <div class="sec1">
            <p>Status</p>
            <h2>Cancelled</h2>
          </div>
          <div class="sec2">
            <p>Cancelled on</p>
            <h3>15 SEP 2023</h3>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>
  <div class="card-bottom">
    <h1>Total:  £139.99</h1>
  </div>
</div>


<script src="js/orderspage.js"></script>
@include('partials.footer')

</body>
</html>