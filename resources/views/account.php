<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <title>Your Page Title</title>
</head>
<body>

<div class="header">
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
</div>

<header>
    <h1>Your Account</h1>
</header>
<main>
    
<section class="account-sections" id="Orders">
        <h2>Orders</h2>
        <p>Track, return, cancel an order</p>
        <div class="edit-order" onclick="openPopup('ordersPopup')">See your order history ></div>
    </section>

    <section class="account-sections" id="LoginSecurity">
        <h2>Login &amp; Security</h2>
        <p>Manage password, email, and mobile number</p>
        <div class="edit-text" onclick="openPopup('loginsecurityPopup')">Edit</div>
    </section>

    <section class="account-sections" id="Address">
        <h2>Addresses</h2>
        <p>Edit, remove, or set the default address</p>
        <div class="edit-text" onclick="openPopup('addressPopup')">Edit</div>
    </section>

    <section class="account-sections" id="Payments">
        <h2>Payments</h2>
        <p>Manage or add payment methods and view your transactions</p>
        <div class="edit-text" onclick="openPopup('paymentsPopup')">Edit</div>
    </section>

</main>

<div class="popup" id="ordersPopup">
    <div class="popup-content">
        <span class="close" onclick="closePopup('ordersPopup')">&times;</span>
        <div class="as-l-container"><div class="rs-ol-wrapper"><h1 class="rs-ol-heading">Products you’ve ordered.</h1><p5 class="callout-copy">Only purchases from the last 18 months will be shown here.</p5></div></div>
        <div class="row as-l-container"><p6 class="rs-order-link rs-noitem"><span class="rs-space-after">Can’t see your order?</span></p6></div>
    </div>
    <hr class="blue-line">
    <a class="find">Don't Worry. Find it now....</a>

    <div class="guest-lookup__form-wrapper">
  <form novalidate="" class="guest-lookup__form ng-untouched ng-pristine ng-invalid">
    <div class="guest-lookup__title suball_title">Enter order ID and Email ID</div>
    <div class="guest-lookup__mandatory-label suball_mandatory-label ng-star-inserted">
      <span class="ng-star-inserted">*</span><!---->Mandatory fields
    </div>
    <!---->
    <div class="guest-lookup__form-fields">
      <mat-form-field class="mat-mdc-form-field guest-lookup__form-field ng-tns-c118-3 suball_form-field mat-mdc-form-field-type-mat-input mat-form-field-appearance-fill mat-form-field-hide-placeholder mat-primary ng-untouched ng-pristine ng-invalid ng-star-inserted">
        <!---->
        <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c118-3 mdc-text-field--filled">
          <div class="mat-mdc-form-field-focus-overlay ng-tns-c118-3 ng-star-inserted"></div>
          <!---->
          <div class="mat-mdc-form-field-flex ng-tns-c118-3">
            <!---->
            <!---->
            <!---->
            <div class="mat-mdc-form-field-infix ng-tns-c118-3">
              <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c118-3 ng-star-inserted" id="mat-mdc-form-field-label-0" for="mat-input-0" aria-owns="mat-input-0">
                <mat-label class="ng-tns-c118-3">Order ID</mat-label>
                <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c118-3 ng-star-inserted"></span>
                <!---->
              </label>
              <!---->
              <!---->
              <!---->
              <input matinput="" type="text" formcontrolname="orderId" required="" class="mat-mdc-input-element ng-tns-c118-3 ng-untouched ng-pristine ng-invalid mat-mdc-form-field-input-control mdc-text-field__input cdk-text-field-autofill-monitored" id="mat-input-0" aria-required="true">
            </div>
            <!---->
            <!---->
          </div>
          <div matformfieldlineripple="" class="mdc-line-ripple ng-tns-c118-3 mdc-line-ripple--deactivating ng-star-inserted"></div>
          <!---->
        </div>
        <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c118-3">
          <!---->
          <div class="mat-mdc-form-field-hint-wrapper ng-tns-c118-3 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
            <!---->
            <div class="mat-mdc-form-field-hint-spacer ng-tns-c118-3"></div>
          </div>
          <!---->
        </div>
      </mat-form-field>
      <mat-form-field class="mat-mdc-form-field guest-lookup__form-field ng-tns-c118-4 mat-mdc-form-field-type-mat-input mat-form-field-appearance-fill mat-form-field-hide-placeholder mat-primary ng-untouched ng-pristine ng-invalid ng-star-inserted">
        <!---->
        <div class="mat-mdc-text-field-wrapper mdc-text-field ng-tns-c118-4 mdc-text-field--filled">
          <div class="mat-mdc-form-field-focus-overlay ng-tns-c118-4 ng-star-inserted"></div>
          <!---->
          <div class="mat-mdc-form-field-flex ng-tns-c118-4">
            <!---->
            <!---->
            <!---->
            <div class="mat-mdc-form-field-infix ng-tns-c118-4">
              <label matformfieldfloatinglabel="" class="mdc-floating-label mat-mdc-floating-label ng-tns-c118-4 ng-star-inserted" id="mat-mdc-form-field-label-2" for="mat-input-1" aria-owns="mat-input-1">
                <mat-label class="ng-tns-c118-4">Email ID</mat-label>
                <span aria-hidden="true" class="mat-mdc-form-field-required-marker mdc-floating-label--required ng-tns-c118-4 ng-star-inserted"></span>
                <!---->
              </label>
              <!---->
              <!---->
              <!---->
              <input matinput="" type="text" formcontrolname="orderId" required="" class="mat-mdc-input-element ng-tns-c118-3 ng-untouched ng-pristine ng-invalid mat-mdc-form-field-input-control mdc-text-field__input cdk-text-field-autofill-monitored" id="mat-input-0" aria-required="true">            </div>
            <!---->
            <!---->
          </div>
          <div matformfieldlineripple="" class="mdc-line-ripple ng-tns-c118-4 mdc-line-ripple--deactivating ng-star-inserted"></div>
          <!---->
          <div class="mat-mdc-form-field-subscript-wrapper mat-mdc-form-field-bottom-align ng-tns-c118-4"><!----><div class="mat-mdc-form-field-hint-wrapper ng-tns-c118-4 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);"><!----><div class="mat-mdc-form-field-hint-spacer ng-tns-c118-4"></div></div><!----></div>
    
        
          <div class="guest-lookup__form-button-container"><button type="submit" class="guest-lookup__form-button button pill-btn pill-btn--black suball_form-button" disabled="" data-an-tr="account-order-lookup" data-an-la="order look up:search"> Search </button></div>
    
    
        </div>

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
                <button type="button" id="edit" name="edit" class="edit-btn">Edit</button>

            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email1" id="email" name="email" value="Bytetop@gmail.com" disabled>
                <button type="button" id="edit" name="edit" class="edit-btn">Edit</button>

            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="tel1" id="mobile" name="mobile" placeholder="Add your mobile number" disabled>
                <button type="button" id="edit" name="edit" class="edit-btn">Add</button>

            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password1" id="password" name="password" value="**********" disabled>
                <button type="button" id="edit" name="edit" class="edit-btn">Edit</button>

            </div>
            
            
        </form>
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
        
       <!-- <div class="row">
            <div class="column large-12">
                <h2 id="edit-address-header" class="rs-account-addressoverlay-subheader typography-headline-reduced">Edit your shipping address.</h2>
            </div>
            <div class="column small-12 large-9 large-centered">
                <div class="rs-settings-overlay-address-container">
                    <div class="rf-form-layout-root">
                        <div class="rf-form-layout rf-form-layout--fullwidth">
                            <div class="rf-form-layout-section rf-form-layout-section--title">
                               
                                                        <div class="rf-form-layout-row rf-form-layout-row-combo--firstName">
                                                            <div class="rf-form-layout-row-fields column small-12 large-12">
                                                                <div class="row">
                                                                    <div class="column large-12 small-12 rf-form-layout-field--firstName">
                                                                        <div class="rf-form-layout-field">
                                                                            <div class="">
                                                                                <div class="form-textbox"> 
                                                                                    <input id="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.firstName" name="firstName" type="text" class="form-textbox-input form-textbox-entered" aria-labelledby="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.firstName_label" aria-describedby="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.firstName_error " aria-invalid="false" maxlength="14" required="" aria-required="true" autocomplete="given-name" data-autom="form-field-firstName" value="">
                                                                                    <span id="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.firstName_label" class="form-textbox-label" aria-hidden="true">First Name</span>
                                                                                </div></div></div></div></div></div></div>
                                                                                
                                                                                <div class="rf-form-layout-row rf-form-layout-row-combo--lastName">
                                                                                    <div class="rf-form-layout-row-fields column small-12 large-12">
                                                                                        <div class="row">
                                                                                            <div class="column large-12 small-12 rf-form-layout-field--lastName">
                                                                                                <div class="rf-form-layout-field">
                                                                                                    <div class="">
                                                                                                        <div class="form-textbox"> 
                                                                                                            <input id="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.lastName" name="lastName" type="text" class="form-textbox-input form-textbox-entered" aria-labelledby="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.lastName_label" aria-describedby="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.lastName_error " aria-invalid="false" maxlength="20" required="" aria-required="true" autocomplete="family-name" data-autom="form-field-lastName" value=""><span id="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.lastName_label" class="form-textbox-label" aria-hidden="true">Surname</span></div></div></div></div></div></div></div>
                                                                                                            
                                                                                                            <div class="rf-form-layout-row rf-form-layout-row-combo--street">
                                                                                                                <div class="rf-form-layout-row-fields column small-12 large-12">
                                                                                                                    <div class="row">
                                                                                                                        <div class="column large-12 small-12 rf-form-layout-field--street">
                                                                                                                            <div class="rf-form-layout-field">
                                                                                                                                <div class="">
                                                                                                                                    <div class="form-textbox">
                                                                                                                                         <input id="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.street" name="street" type="text" class="form-textbox-input" aria-labelledby="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.street_label" aria-describedby="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.street_error " aria-invalid="false" maxlength="35" required="" aria-required="true" autocomplete="address-line1" data-autom="form-field-street" value="">
                                                                                                                                         <span id="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.street_label" class="form-textbox-label" aria-hidden="true">Address Line 1</span></div></div></div></div></div></div></div>
                                                                                                                                         
                                                                                                                                         
                                                                                                                                         <div class="rf-form-layout-row rf-form-layout-row-combo--city">
                                                                                                                                            <div class="rf-form-layout-row-fields column small-12 large-12">
                                                                                                                                                <div class="row">
                                                                                                                                                    <div class="column large-12 small-12 rf-form-layout-field--city">
                                                                                                                                                        <div class="rf-form-layout-field">
                                                                                                                                                            <div class="">
                                                                                                                                                                <div class="form-textbox"> 
                                                                                                                                                                    <input id="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.city" name="city" type="text" class="form-textbox-input" aria-labelledby="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.city_label" aria-describedby="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.city_error " aria-invalid="false" maxlength="30" required="" aria-required="true" autocomplete="address-level2" data-autom="form-field-city" value=""><span id="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.city_label" class="form-textbox-label" aria-hidden="true">Town/City</span></div></div></div></div></div></div></div>
                                                                                                                                                                    
                                                                                                                                                                    <div class="rf-form-layout-row rf-form-layout-row-combo--county-and-postalCode">
                                                                                                                                                                        <div class="rf-form-layout-row-fields column small-12 large-12 form-textbox-sidebyside">
                                                                                                                                                                            <div class="row">
                                                                                                                                                                                <div class="column large-6 small-12 rf-form-layout-field--county">
                                                                                                                                                                                    <div class="rf-form-layout-field">
                                                                                                                                                                                        <div class="">
                                                                                                                                                                                            <div class="form-textbox"> 
                                                                                                                                                                                                <input id="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.county" name="county" type="text" class="form-textbox-input" aria-labelledby="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.county_label" aria-describedby="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.county_error " aria-invalid="false" maxlength="20" aria-required="false" autocomplete="address-level2" data-autom="form-field-county" value=""><span id="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.county_label" class="form-textbox-label" aria-hidden="true" aria-label="County (Optional)">County (opt.)</span></div></div></div></div>
                                                                                                                                                                                                
                                                                                                                                                                                                <div class="column large-6 small-12 rf-form-layout-field--postalCode">
                                                                                                                                                                                                    <div class="rf-form-layout-field">
                                                                                                                                                                                                        <div class="">
                                                                                                                                                                                                            <div class="form-textbox"> 
                                                                                                                                                                                                                <input id="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.postalCode" name="postalCode" type="text" class="form-textbox-input" aria-labelledby="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.postalCode_label" aria-describedby="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.postalCode_error " aria-invalid="false" maxlength="8" required="" aria-required="true" autocomplete="postal-code" data-autom="form-field-postalCode" value=""><span id="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.postalCode_label" class="form-textbox-label" aria-hidden="true">Postcode</span></div></div></div></div></div></div></div></div></div></div></div><
                                                                                                                                                                                                                
                                                                                                                                                                                                                <div class="rs-account-overlay-change">
                                                                                                                                                                                                                    <button id="home.customerAccount.shippingInfo.shippingAddress.editShippingAddress.editAddress.address-submit" type="button" class="rs-account-overlay-save form-button" data-autom="save-shippingAddress"><span>Save</span></button>
                                                                                                                                                                                                                    <button type="button" class="as-buttonlink" data-autom="cancel-shippingAddress">Cancel</button></div></div></div>

-->
   

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
