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
    <section class="account-sections" id= "Orders">
        <h2 onclick="openPopup('Orders')">Orders</h2>
        <p>Track, return, cancel an order</p>
    </section>

    <section class="account-sections" id = "LoginSecurity">
        <h2 onclick="openPopup('LoginSecurity')">Login &amp; Security</h2>
        <p>Manage password, email, and mobile number</p>
    </section>

    <section class="account-sections" id = "Address">
        <h2 onclick="openPopup('Address')">Addresses</h2>
        <p>Edit, remove, or set the default address</p>
    </section>

    <section class="account-sections" id = Payments>
        <h2 onclick="openPopup('Payments')">Payments</h2>
        <p>Manage or add payment methods and view your transactions</p>
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
              <input matinput="" type="email" formcontrolname="emailId" required="" class="mat-mdc-input-element ng-tns-c118-4 ng-untouched ng-pristine ng-invalid mat-mdc-form-field-input-control mdc-text-field__input cdk-text-field-autofill-monitored" id="mat-input-1" aria-required="true">
            </div>
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
        <h3>Login &amp; Security</h3>
        <!-- Add content for Login & Security -->
        <p2>Your login and security details go here...</p2>
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
        <h3>Your Payments</h3>
        <!-- Add content for payments -->
        <p4>Your payment details go here...</p4>
    </div>
</div>


<div class="popup" id="addressForm" style="display: none;">
    <div class="popup-content">
        <span class="close" onclick="closeAddressForm()">&times;</span>
        <form>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" required>

            <label for="postcode">Postcode:</label>
            <input type="text" id="postcode" name="postcode" required>

            <label for="addressLine">Address Line:</label>
            <input type="text" id="addressLine" name="addressLine" required>

            <label for="townCity">Town/City:</label>
            <input type="text" id="townCity" name="townCity" required>

            <button type="submit">Add Address</button>
        </form>
    </div>
</div>



<script src="js/account.js"></script>

</body>
</html>
