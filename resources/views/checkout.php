<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/">
</head>
<body>
<header>
    <div class="container">
      <div class="navigation">

        <div class="logo">
        <a href="#" id="back_to_cart" onclick="redirectToCart()">Back to cart</a>
        </div>
        
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

    <div class="container">
      <div class="payment">

        <div class="payment__info">
          <div class="payment__cc">
            <div class="Card__title">
              <i class="icon icon-user"></i>Card Details
            </div>

          <div class="card">
            <form>
              <div class="form__cc">
                <div class="row">
                  <div class="field">
                    <div class="title">Card Number
                    </div>
                    <input type="text" class="input txt text-validated" value="" />
                  </div>
                </div>
                <div class="row">
                  <div class="field small">
                    <div class="title">Expiry Date
                    </div>
                    <select class="input ddl">
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
                    <select class="input ddl">
                      <option>01</option>
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
                      <option>13</option>
                      <option>14</option>
                      <option>15</option>
                      <option selected>16</option>
                      <option>17</option>
                      <option>18</option>
                      <option>19</option>
                      <option>20</option>
                      <option>21</option>
                      <option>22</option>
                      <option>23</option>
                      <option>24</option>
                      <option>25</option>
                      <option>26</option>
                      <option>27</option>
                      <option>28</option>
                      <option>29</option>
                      <option>30</option>
                      <option>31</option>
                    </select>
                  </div>
                  <div class="field small">
                    <div class="title">CVV Code
                      <span class="numberCircle">?</span>
                    </div>
                    <input type="text" class="input txt" />
                  </div>
                </div>
                <div class="row">
                  <div class="field">
                    <div class="title">Name on Card
                    </div>
                    <input type="text" class="input txt" />
                  </div>
                </div>

              </div>
            </form>
          </div>
          </div>

          <div class="payment__shipping">
            <div class="payment__title">
              <i class="icon icon-plane"></i> Shipping Information
            </div>




            <div class="name">
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
    <div class="container">
      <div class="actions">

        <a href="#" class="btn action__submit">Place your Order
          <i class="icon icon-arrow-right-circle"></i>
        </a>
        <a href="#" class="backBtn" onclick="redirectToshop()">Go Back to Shop</a>


      </div>
  </section>

  </div>
  <script src="js/checkout.js"></script>

</body>
</html>