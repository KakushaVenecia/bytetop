<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/checkout.css">
</head>


<body>

@include('partials.navbar')

<header>
    <div class="container">
      <div class="navigation">

        
        
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
      <div class="details__item">

        <div class="item__image">
          <img class="iphone" src="https://m.media-amazon.com/images/I/81KDeMk361L._AC_AA180_.jpg" alt="">
        </div>
        <div class="item__details">
          <div class="item__title">
          HP Laptop PC 15s-fq5021sa
          </div>
          <div class="item__price">
          £439.99
          </div>
          <div class="item__quantity">
            Quantity: 1
          </div>
          <div class="item__description">
            <ul style="">
              <li>Intel Core i5-1235U Processor</li>
              <li>8GB RAM | 256GB SSD</li>
              <li>Intel UHD Graphics</li>
              <li>15.6 inch Full HD 16:9 display</li>
              <li>Windows 11 Home</li>
              <li>Natural Silver</li>
            </ul>

          </div>

        </div>
      </div>

    </div>


    

    
    <div class="discount"></div>

    <div class="container1">
      <div class="payment">
        <div class="payment__info">

                          <div class="mainContainer">
                    <div class="cardHolder">
                      <div class="header">
                        <div class="heading center"></div>
                        <div class="stepHeading center">Payment Method</div>
                        <div class="card">
                          <div class="top part">
                            <img src="/images/visa.jpeg" border="0" />
                          </div>
                          <div class="middle part">
                            <div class="infoheader vcenter">CARD NUMBER</div>
                            <div class="infocontent number vcenter">
                              <div class="num center">****</div>
                              <div class="num center">****</div>
                              <div class="num center">4658</div>
                              <div class="num center">****</div>
                            </div>
                          </div>
                          <div class="bottom part">
                            <div class="holderInfo">
                              <div class="infoheader vcenter">CARD HOLDER</div>
                              <div class="holdername ">JOHN DOE</div>
                            </div>
                            <div class="expDate">
                              <div class="infoheader vcenter">EXP. DATE</div>
                              <div class="infocontent date vcenter">09/2023</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <h5 class="center">PAYMENT OPTIONS</h5>
                  
                    <div class="options vcenter">
                      <div class="opt">
                        <div class="icon center">
                        <img src="/images/visa.jpeg" border="0" />
                        </div>
                        <div class="optname center">Card 1</div>
                      </div>
                      <div class="opt">
                        <div class="icon center">
                          <div class = "mastercard"> 
                        <img src="/images/mastercard.png" border="0" />
                        </div>
</div>
                        <div class="optname center">Card 2</div>
                      </div>
                      </div>
                      <div class="opt1">
                        <div class="icon center">
                        </div>
                        <div class="optname1 center">New Card</div>
                      </div>
                    
                    
                  </div>

        
        

         <!-- <form>
        <div class="input-group">
        <div class = "userinput">
        <input type="radio" id="card1" name="card" >
        	<label for="card-number">Add new card</label>
        </div>
            
            <label for="card-number">Card Number</label>
            <input type="text" id="card-number" name="card-number" placeholder="•••• •••• •••• ••••">
        </div>
        <div class="input-group multi-input">
            <div>
                <label for="expiry-date">Expiry Date</label>
                <input type="text" id="expiry-date" name="expiry-date" placeholder="MM / YY">
            </div>
            <div>
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="•••">
            </div>
        </div>
        <div class="input-group">
            <label for="card-holder">Card Holder</label>
            <input type="text" id="card-holder" name="card-holder" placeholder="Full Name">
        </div>
    </form> -->

        
    

          <div class="payment__shipping">
        

            <div class="name">
            <div class="payment__title">
              <i class="icon icon-plane"></i> Shipping Information
            </div>
                    <div class="title">First Name
                    </div>
                    <input type="text" class="input txt text-validated"/>

                    <div class="title">Last Name
                    </div>
                    <input type="text" class="input txt text-validated" />
            
                    <div class="title">Phone Number
                    </div>
                    <input type="text" class="input txt text-validated"/>

                    <div class="title">Postcode
                    </div>
                    <input type="text" class="input txt text-validated"/>

                    <div class="title">Address
                    </div>
                    <input type="text" class="input txt text-validated" />

                    <div class="title">Town/City
                    </div>
                    <input type="text" class="input txt text-validated"/>
            </div>

          </div>
        </div>
      </div>
    </div>
              <div class="placeordercontainer">
                    <div class="actions">

                      <a href="#" class="btn action__submit">Place your Order
                      </a>


                    </div>
              </div>
  
    </section>

  </div>
  <script src="js/checkout.js"></script>

</body>
</html>