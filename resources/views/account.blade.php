<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/4d0aa3dbc2.js" crossorigin="anonymous"></script>  
    <title>Your Page Title</title>
</head>



@include('partials.navbar')

<body>
        
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
        <div class="as-l-container"><div class="rs-ol-wrapper"><h1 class="rs-ol-heading">Products you've ordered.</h1><p5 class="callout-copy">Only purchases from the last 3 months will be shown here.</p5></div></div>
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
        <input required="" type="text2" class="input7">
        <span class="highlight"></span>
        <span class="bar"></span>
    </div>

            <div class="grp">
                <button> Order loopup </button>
            </div>

        </div>
    </div>









    <div class="popup" id="loginsecurityPopup" style="display: none;">
        <div class="popup-content">
            <span class="close" onclick="closePopup('loginsecurityPopup')">&times;</span>

            <div class="loginpopup">
                <div class="container1">
                    <h0>Login & Security</h0>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text1" id="name" name="name" value="ByteTop" disabled>
                            <button type="button" id="changeName" class="edit-btn" onclick="openEditPopup('editNamePopup')">Edit</button>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email1" id="email" name="email" value="Bytetop@gmail.com" disabled>
                            <button type="button" id="editEmail" class="edit-btn" onclick="openEditPopup('editEmailPopup')">Update</button>
                        </div>

                        <div class="form-group">
                            <label for="mobile">Number</label>
                            <input type="tel1" id="mobile" name="mobile" placeholder="Add your mobile number" disabled>
                            <button type="button" id="editMobile" class="edit-btn" onclick="openEditPopup('editMobilePopup')">Add</button>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password1" id="password" name="password" value="userpassword" disabled>
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
                        <label>New name *</label>
                            <input required="" type="text2" class="input">
                        </div>
                        <div class="namegrp">
                            <button type="button" onclick="updateField('name', 'newName')">Save changes</button>
                        </div>
                    </div>
                </div>



                <div id="editEmailPopup" class="edit-popup" style="display: none">
                    <span class="close" onclick="closePopup('editEmailPopup')">&times;</span>
                    <h01>Change your email address</h01>
                    <div class="namecontainer">
                        <div class="message">Enter the new email address you would like to associate with your account below.</div>
                        <div class="namegroup">
                        <label>New email address*</label>
                            <input required="" type="text2" class="input">
                        </div>
                        <div class="namegrp">
                            <button id="verifyButton" type="button" >Verify</button>
                        </div>
                    </div>
                </div>



                <div id="editMobilePopup" class="edit-popup" style="display: none">
                    <span class="close" onclick="closePopup('editMobilePopup')">&times;</span>
                    <h01>Add mobile number</h01>
                    <div class="namecontainer">
                        <div class="message">Enter the new mobile number you would like to associate with your account below...   We will send a One Time Password (OTP) to that number.</div>
                        <div class="namegroup">
                        <label>Mobile number *</label>
                            <input required="" type="text2" class="input">
                        </div>
                        <div class="namegrp">
                            <button id="verifyButton" type="button" >Verify</button>
                        </div>
                    </div>
                </div>


                <div id="editPasswordPopup" class="edit-popup" style="display: none">
                    <span class="close" onclick="closePopup('editPasswordPopup')">&times;</span>
                    
                        <div class="modal" id="changePasswordModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Change Password</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                       
                                        <form method="post" action="{{ route('update.password') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="current_password">Current Password</label>
                                                <input type="password" class="form-control" id="current_password" name="current_password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="new_password">New Password</label>
                                                <input type="password" class="form-control" id="new_password" name="new_password" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="confirm_password">Confirm Password</label>
                                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                                            </div>
                                            <button type="submit" class="btn-primary">Save changes</button>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                </div>




</div>

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










<div class="popup2" id="paymentsPopup" style="display: none;">

    <span class="close" onclick="closePopup('paymentsPopup')">&times;</span>

    <div class="popup-content">

            <div class="payment_col-50">

    <h3>Add your Payment details...</h3>
    <h4>Card Details</h4>
    <div style= "margin-bottom :1px"class="cards">
          @foreach ($paymentCards as $paymentCard)
                <p class="Card number">{{ $paymentCard->card_number }}</p>
                <p class="Expiry month">{{ $paymentCard->expiry_month }}</p>
                <p class="Expiry year">{{ $paymentCard->expiry_year }}</p>
                <p class="Security code">{{ $paymentCard->security_code }}</p>
                <p class="Name">{{ $paymentCard->name }}</p>
        </div>
    @endforeach
    
    <hr class="white-line">
    <div class = "information"> 
        Changes to this payment information will apply to your account and will affect your purchases.
    </div>
   
    
    <div class="payment__cc">
            <div class="Card__title">
              <i class="icon icon-user"></i>Payment Method
            </div>
          <form method="POST" action="{{ route('add-card-btn') }}">
                        @csrf
              <div class="form__cc">
                <div class="row">
                  <div class="field">
                    <div class="title">Card Number
                    <i class="fa-brands fa-cc-visa" style="color:navy;"></i>
                    <i class="fa-brands fa-cc-amex" style="color:blue;"></i>
                    <i class="fa-brands fa-cc-mastercard" style="color:red;"></i>
                    <i class="fa-brands fa-cc-discover" style="color:orange;"></i>
                    </div>
                    <input type="text" name="card_number" class="input txt text-validated" value="" />
                  </div>
                </div>
                <div class="row">
                  <div class="field small">
                    <div class="title">Expiry Date
                    <select name="expiry_month" class="input1 ddl">
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
                    <select name="expiry_year" class="input1 ddl">
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
                  </div>
                  <div class="field small">
                    <div class="title">Security Code (CVV/CVC)
                      <span class="numberCircle">?</span>
                    </div>
                    <input type="text" name="security_code" class="input1 txt" />
            </div>
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Name on Card
                    </div>
                    <input type="text" name="name" class="input2 txt" />
                  </div>
                </div>

            </div>
                    <div class="button-container">
                    <button type="button" class="cancel-btn">Cancel</button>
                    <button type="submit" class="add-card-btn">Add Your Card</button>
            </form>
                </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>










<div class="popup" id="addressForm" style="display: none;">
    <div class="popup-content">
        <span class="close" onclick="closeAddressForm()">&times;</span>
            <div class= "addresform">
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3> Shipping Address </h3>
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

</div>

        </div>
    </div>

<script src="js/account.js"></script>
@include('partials.footer')
</body>

</html>