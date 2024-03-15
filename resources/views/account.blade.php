<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="css/account.css"> --}}
    <script src="https://kit.fontawesome.com/4d0aa3dbc2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    
    <title>Your Page Title</title>
</head>
<style>
    *{
        margin:0px;
    }
.header {
    background-color: #001E2C;
    color: white;
    padding: 10px;
    text-align: right;
    height: 10rem;
}

.user-profile {
    position: relative;
}

.user-icon {
    cursor: pointer;
}

.profile-menu {
    position: absolute;
    top: 100%;
    right: 0;
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 10px;
    display: none;
}

.profile-menu a {
    display: block;
    color: #333;
    text-decoration: none;
    padding: 5px 10px;
}

.profile-menu a:hover {
    background-color: orange;
    color: #001E2C;
}

/* Main header */
header {
    background-color: #f0f0f0;
    padding: 20px;
    text-align: center;
    height: 10rem;
}

/* Main content */
main {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px;
}

.account-sections {
    width: 45%;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    padding: 20px;
    margin-bottom: 20px;
    height: 150px;
}

.inner-content {
    text-align: center;
    line-height: 1.5; /* Adjust line height as needed */
    margin-bottom: 20px; /* Add margin between lines */
}

.inner-content h2,
.inner-content p {
    margin: 0; /* Remove default margins for heading and paragraph */
}

.edit-text, .edit-order {
    cursor: pointer;
    color: blue;
    display: inline-block; 
    margin-left: 10px;
}

.blurbackground {
    filter: blur(2px);
}

/* Popups */
.popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    z-index: 999;
    display: none;
    width: 30rem;
    height: 30rem;
   
}


.ordergroup {
    margin-top: 2rem;
}



a.find {
    font-size: 1.5rem;
    /* padding: 3rem; */
}


hr.blue-line {
    margin-bottom: 2rem;
}


.row.as-l-container {
    font-size: 1.2rem;
    margin-top: 2rem;
    margin-bottom: 2rem;
}


p5.callout-copy {
    font-size: 1.3rem;
}



#addressForm{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    z-index: 999;
    display: none;
    width: 80%; /* Adjust the width as needed */
    max-width: 600px; /* Set a maximum width to prevent it from becoming too wide */
    max-height: 80%; /* Set a maximum height to prevent it from becoming too tall */
    overflow-y: auto; /
}

.popup-content {
    position: relative;
}

.close {
    position: absolute;
    top: 5px;
    right: 5px;
    cursor: pointer;
    background-color: orange;
    color: #040404;
    padding: 5px;
    border-radius: 50%;
    font-size: 16px;
    line-height: 1;
    transition: background-color 0.3s ease;
}

a:hover{
    background-color: orange;
    color: white;
}
.close:hover {
    background-color: #999;
}

/* Form styling */
.container {
    width: 100%;
    padding: 16px;
    background-color: white;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
    margin-top: 6px;
    margin-bottom: 16px;
}

label {
    margin-top: 6px;
    display: block;
    font-weight: bold;
}

.blurbackground{
    filter:none;
    filter: blur(2px);
}

.blurbackground {
    filter: blur(2px); /* Apply the blur effect */
}

.btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    width: 100%;
    margin-top: 10px;
    font-size: 16px;
}

.btn:hover {
    background-color: #45a049;
}

.col-25 {
    float: left;
    width: 45%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}


h1 {
    margin-top: 3rem;
}


h22.order-lookup-header {
    font-size: 2rem;
    font-weight: 600;
}


.group {
    margin-left: 7rem;
}

.grp {
    margin-left: 9rem;
    margin-top: 1rem;
}


.grp button {
    background-color: white;
    border-radius: 12px;
}

.grp button:hover {
    background-color: #f7890b; /* Changed to orange */
    color: #000!important;
}


    </style>
<body>
@include('partials.navbar')
        <!-- <div class="header">
            <div class="user-profile" onmouseover="showMenu()" onmouseout="hideMenu()" onclick="toggleMenu()">
                <span class="user-icon"><i class="fas fa-user"></i></span>
                <div class="profile-menu" id="profileMenu" style="display: none;">
                    <a href="#" onclick="openPopup('Account')">Account</a>
                    <a href="#" onclick="openPopup('Orders')">Orders</a>
                    <a href="#" onclick="openPopup('LoginSecurity')">Login &amp; Security</a>
                    <a href="#" onclick="openPopup('Address')">Address</a>
                    <a href="#" onclick="openPopup('Payments')">Payments</a>
                    <a href="#" onclick="signOut()">Sign Out</a>
                </div>
            </div>
        </div>  -->
<header>
    <h1>Your Account</h1>
</header>
<main class="blurbackground">
    <section class="account-sections top-left" id="Orders">
        <div class="inner-content">
            <h2>Orders</h2>
            <p>Track, return, cancel an order</p>
            <div class="edit-order" onclick="openPopup('ordersPopup')">See your order history &gt;</div>
        </div>
    </section>

    <section class="account-sections top-right" id="LoginSecurity">
        <div class="inner-content">
            <h2>Login &amp; Security</h2>
            <p>Manage password, email, and mobile number</p>
            <div class="edit-text" onclick="openPopup('loginsecurityPopup')">Edit</div>
        </div>
    </section>

    <section class="account-sections bottom-left" id="Address">
        <div class="inner-content">
            <h2>Addresses</h2>
            <p>Edit, remove, or set the default address</p>
            <div class="edit-text" onclick="openPopup('addressPopup')">Edit</div>
        </div>
    </section>

    <section class="account-sections bottom-right" id="Payments">
        <div class="inner-content">
            <h2>Payments</h2>
            <p>Manage or add payment methods and view your transactions</p>
            <div class="edit-text" onclick="openPopup('paymentsPopup')">Edit</div>
        </div>
    </section>
</main>

<div class="popup" id="ordersPopup">
    <div class="popup-content">
        <span class="close" onclick="closePopup('ordersPopup')">&times;</span>
        <div class="as-l-container"><div class="rs-ol-wrapper"><h1 class="rs-ol-heading">Products you've ordered.</h1><p5 class="callout-copy">Only purchases from the last 18 months will be shown here.</p5></div></div>
        <div class="row as-l-container"><p6 class="rs-order-link rs-noitem"><span class="rs-space-after">Can't see your order?</span></p6></div>
    </div>
    <hr class="blue-line">
    <a class="find">Don't Worry. Find it now....</a>
<div class = "ordergroup">
    <div class="head">
        <h22 class="order-lookup-header">Order Lookup</h22>
    </div>


    <div class="group">
        <label>Order ID *</label>
        <input required="" type="text2" class="input">
        <span class="highlight"></span>
        <span class="bar"></span>
    </div>

    <div class= "grp">
        <button> Order loopup </button>
    </div>

</div>
</div>





<div class="popup" id="loginsecurityPopup" style="display: none;">
    <div class="popup-content">
        <span class="close" onclick="closePopup('loginsecurityPopup')">&times;</span>
        
        <body2>
        <div class="container1">
    <h0>Login & Security</h0>
    <form action="#" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text1" id="name" name="name" value="ByteTop" disabled>
            <button type="button" id="changeName" class="edit-btn" onclick="openEditPopup('editNamePopup')">Change</button>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email1" id="email" name="email" value="Bytetop@gmail.com" disabled>
            <button type="button" id="editEmail" class="edit-btn" onclick="openEditPopup('editEmailPopup')">Change</button>
        </div>

        <div class="form-group">
            <label for="mobile">Mobile Number</label>
            <input type="tel1" id="mobile" name="mobile" placeholder="Add your mobile number" disabled>
            <button type="button" id="editMobile" class="edit-btn" onclick="openEditPopup('editMobilePopup')">Add</button>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password1" id="password" name="password" value="" disabled>
            <button type="button" id="editPassword" class="edit-btn" onclick="openEditPopup('editPasswordPopup')">Change</button>
        </div>
    </form>
</div>

<!-- Edit Name Popup -->
<div id="editNamePopup" class="edit-popup" style="display: none">
    <span class="close" onclick="closePopup('editNamePopup')">&times;</span>

    <h01>Change your name</h01>
    <div class="namecontainer">
        <div class="message">Make sure that you click the Save Changes button when you have finished...</div>
        
        <div class="namegroup">
            <input required="" type="text2" class="input">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>New name *</label>
        </div>

        <div class= "namegrp">
            <button type="button" onclick="updateField('name', 'newName')">Save changes</button>
        </div>
        
    </div>
</div>


</body2>
        
    </div>
</div>

<div class="popup" id="addressPopup" style="display: none;">
    <div class="popup-content">
        <span class="close" onclick="closePopup('addressPopup')">&times;</span>
        <div class="address_container">
            <h4>Your Address</h4>
            <div class="dotted-box">
                <div class="add-address">
                    <div class="address_box">
                        <span class="plus-icon" onclick="openAddressForm()">+ Add Address</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="popup" id="paymentsPopup" style="display: none;">
    <div class="popup-content">
        <span class="close" onclick="closePopup('paymentsPopup')">&times;</span>

        <div class="payment_col-50">

    <h3>Add your Payment details...</h3>
    <hr class="white-line">
    <div class = "info"> 
        Changes to this payment information will apply to your account and will affect your purchases.
    </div>
    
    <div class="payment__cc">
            <div class="Card__title">
              <i class="icon icon-user"></i>Payment Method
            </div>

          <div class="card">
            <form>
              <div class="form__cc">
                <div class="row">
                  <div class="field">
                    <div class="title">Card Number
                    <i class="fa-brands fa-cc-visa" style="color:navy;"></i>
                    <i class="fa-brands fa-cc-amex" style="color:blue;"></i>
                    <i class="fa-brands fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa-brands fa-cc-discover" style="color:orange;"></i>
                    </div>
                    <input type="text1" class="input1 txt text-validated" value="" />
                  </div>
                </div>
                <div class="row">
                  <div class="field small">
                    <div class="title">Expiry Date
                    </div>
                    <select class="input1 ddl">
                      <option selected>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                    </select>
                    <select class="input1 ddl">
                      <option>2024</option>
                      <option>2025</option>
                      <option>2026</option>
                      <option>2027</option>
                      <option>2028</option>
                      <option selected>2029</option>
                      <option>2030</option>
                      <option>2031</option>
                      <option>2032</option>
                      <option>2033</option>
                      <option>2034</option>
                      <option>2035</option>
                      <option>2036</option>
                      <option>2037</option>
                      <option>2038</option>
                      <option>2039</option>
                      <option>2040</option>
                      <option>2041</option>
                      <option>2042</option>
                      <option>2043</option>
                      <option>2044</option>
                      
                    </select>
                  </div>
                  <div class="field small">
                    <div class="title">Security Code (CVV/CVC)
                      <span class="numberCircle">?</span>
                    </div>
                    <input type="text1" class="input1 txt" />
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Name on Card
                    </div>
                    <input type="text1" class="input1 txt" />
                  </div>
                </div>

              </div>
            </form>
          </div>
          </div>

          <div class="button-container">
            <button class="cancel-btn">Cancel</button>
            <button class="add-card-btn">Add Your Card</button>
        </div>

</div>

    </div>
</div>


<div class="popup" id="addressForm" style="display: none;">
    <div class="popup-content">
        <span class="close" onclick="closeAddressForm()">&times;</span>
   

<body1>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h> Shipping Address </h>
            <label for="fname"><i class="fa fa-user"></i> First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Byte">
            <label for="lname"><i class="fa fa-user"></i> Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Top">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Bytetop@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i>Town/City</label>
            <input type="text" id="city" name="city" placeholder="Birmingham">

            <div class="row">
              <div class="col-50">
                <label for="state">Country</label>
                <input type="text" id="state" name="state" placeholder="ENG">
              </div>
              <div class="col-50">
                <label for="zip">Postcode</label>
                <input type="text" id="zip" name="zip" placeholder="">
              </div>
            </div>
          </div>

          
          
        </div>
        <input type="submit" value="Add address" class="btn">
      </form>
    </div>
  </div>
  
</div>

</body1>







</div>
</div>






<script src="js/account.js"></script>

</body>
</html>