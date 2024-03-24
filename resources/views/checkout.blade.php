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
                              <div class="num center">****</div>
                              <div class="num center">1234</div>
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
                        <div class="opt2" id="card1">
                            <div class="icon center">
                              <img src="/images/visa.jpeg" border="0" />
                            </div>
                            <div class="optname center">Card 1</div>
                        </div>
                        <div class="opt3" id = "card2">
                          <div class="icon center">
                            <div class = "mastercard"> 
                              <img src="/images/mastercard.png" border="0" />
                            </div>
                          </div>
                          <div class="optname center">Card 2</div>
                        </div>
                    </div>
                    <div class="opt1" id="newCard">
                        <div class="icon center"></div>
                        <div class="optname1 center">New Card</div>
                    </div>
                    
                    
                </div>


                <div id="new-card-popup" class="new-card-popup">

    <div class="popup-content">
        <form class="new-card-form">
            <div class="input-group">
                <label for="card-number">Card Number</label>
                <input type="text1" id="card-number" name="card-number" placeholder="•••• •••• •••• ••••">
            </div>
            <div class="input-group multi-input">
                <div>
                    <label for="expiry-date">Expiry Date</label>
                    <!-- <input type="text2" id="expiry-date" name="expiry-date" placeholder="MM / YY"> -->
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
                <div>
                    <label for="cvv">CVV</label>
                    <input type="text3" id="cvv" name="cvv" placeholder="•••">
                </div>
            </div>
            <div class="input-group">
                <label for="card-holder">Card Holder</label>
                <input type="text4" id="card-holder" name="card-holder" placeholder="Full Name">
            </div>
            <button id="save-new-card-btn" class="save-new-card-btn">Save</button>

            <button id="close-popup" class="close-popup">X</button>

        </form>
        
    </div>
</div>

              </div>
          <div class="payment__shipping">
            <div class="name">
            <div class="payment__title">
              <i class="icon icon-plane"></i> Shipping Information
            </div>
                    <div class="title">First Name
                    </div>
                    <input type="text" class="input txt text-validated" placeholder="Byte"/>

                    <div class="title">Last Name
                    </div>
                    <input type="text" class="input txt text-validated"  placeholder="Top"/>
            
                    <div class="title">Phone Number
                    </div>
                    <input type="text" class="input txt text-validated" placeholder="1234567890"/>

                    <div class="title">Postcode
                    </div>
                    <input type="text" class="input txt text-validated"/>

                    <div class="title">Address
                    </div>
                    <input type="text" class="input txt text-validated" placeholder="542 W. 15th Street"/>

                    <div class="title">Town/City
                    </div>
                    <input type="text" class="input txt text-validated" placeholder="Birmingham" />
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
  @include('partials.footer')

</body>
</html>