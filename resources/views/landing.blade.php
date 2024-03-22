<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
  
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <title>Document</title>
</head>

<body>
    @include('partials.navbar')
   
    {{-- <!-- <img class="slide" src="{{asset('images/header.webp')}}" alt="" srcset=""> --> --}}
    {{-- <section class="hero"> --}}
    {{-- <link rel="preload" as="image" href="https://source.unsplash.com/300x360?0" />
    <link rel="preload" as="image" href="https://source.unsplash.com/300x360?1" />
    <link rel="preload" as="image" href="https://source.unsplash.com/300x360?2" /> --}}

  
    {{-- <div class="content-hero">
      <h1>ByteTop</h1>
      <p>Get Amazing Products at Student Friendly Pricesr</p>
      <a href="#" class="btn">Browse our cataloge</a>
    </div>
  </section> --}} 
  
  
  <div class="container" id="productContainer">
    <div class="product laptops">
      <button class="arrow left">&lt;</button>
      <div class="product-content">
        <a href="laptops.html">
          <h2>Laptops Catalogues</h2>
          <p> Here you find the Best Laptops.</p>
          <p> Click here to view more...</p>
        </a>
      </div>
      <button class="arrow right">&gt;</button>
    </div>
    <div class="product computers">
      <button class="arrow left">&lt;</button>
      <div class="product-content">
        <a href="computers.html">
          <h2>Computers Catalogues</h2>
          <p> Here you find the Best Computers.</p>
          <p> Click here to view more...</p>
        </a>
      </div>
      <button class="arrow right">&gt;</button>
    </div>
    <div class="product accessories">
      <button class="arrow left">&lt;</button>
      <div class="product-content">
        <a href="accessories.html">
          <h2>Accessories Catalogues</h2>
          <p> Here you find the Best Accessories.</p>
          <p> Click here to view more...</p>
        </a>
      </div>
      <button class="arrow right">&gt;</button>
    </div>
    <div class="product monitors">
      <button class="arrow left">&lt;</button>
      <div class="product-content">
        <a href="monitors.html">
          <h2>Monitors Catalogues</h2>
          <p> Here you find the Best Monitors.</p>
          <p> Click here to view more...</p>
        </a>
      </div>
      <button class="arrow right">&gt;</button>
    </div>
    <div class="product desktops">
      <button class="arrow left">&lt;</button>
      <div class="product-content">
        <a href="desktops.html">
          <h2>All in one Desktops Catalogues</h2>
          <p> Here you find the Best All in one Desktops.</p>
          <p> Click here to view more...</p>
        </a>
      </div>
      <button class="arrow right">&gt;</button>
    </div>
  </div>



    </div>
    <h1>Popular Deals</h1>
    <div class="grid-container">
        <div class="grid-item">
            <img src="{{asset('images/galaxybook.webp')}}" class="item-image" alt="">
            <h1 class="body-title">Galaxy Book</h1>
            <p class="body-content">Get this at only £400.</p>
            
            <div class="review">
            <div class="stars">
                <span class="star full">&#9733;</span>
                <span class="star full">&#9733;</span>
                <span class="star full">&#9733;</span>
                <span class="star half">&#9733;</span>
                <span class="star empty">&#9733;</span>
            </div>
        </div>



            <button class="btn btn-add">Add to Cart</button>
        </div>
        <div class="grid-item">
            <img src="{{asset('images/Lenovoyoga.webp')}}" class="item-image" alt="">
            <h1 class="body-title">Lenovo Yoga</h1>
            <p class="body-content">Get this at only £800.</p>

            <div class="review">
            <div class="stars">
                <span class="star full">&#9733;</span>
                <span class="star full">&#9733;</span>
                <span class="star full">&#9733;</span>
                <span class="star full">&#9733;</span>
                <span class="star half">&#9733;</span>
            </div>
        </div>

            
            <button class="btn btn-add">Add to Cart</button>
        </div>
         <div class="grid-item">
        <img src="{{asset('images/hpenvy.webp')}}" class="item-image" alt="">
        <h1 class="body-title">HP Envy</h1>
        <p class="body-content">Get this at only £400.</p>
        <div class="review">
            <div class="stars">
                <span class="star full">&#9733;</span>
                <span class="star full">&#9733;</span>
                <span class="star full">&#9733;</span>
                <span class="star empty">&#9733;</span>
                <span class="star empty">&#9733;</span>
            </div>
        </div>

        <button class="btn btn-add">Add to Cart</button>
        </div>
        <div class="grid-item">
            <img src="{{asset('images/Lenovoyoga.webp')}}" class="item-image" alt="">
            <h1 class="body-title">Lenovo Yoga</h1>
            <p class="body-content">Get this at only £800.</p>
            <div class="review">
            <div class="stars">
                <span class="star full">&#9733;</span>
                <span class="star full">&#9733;</span>
                <span class="star full">&#9733;</span>
                <span class="star half">&#9733;</span>
                <span class="star empty">&#9733;</span>
            </div>
        </div>
            <button class="btn btn-add">Add to Cart</button>
        </div>

        <div class="grid-item">
            <img src="{{asset('images/hpenvy.webp')}}" class="item-image" alt="">
            <h1 class="body-title">HP Envy</h1>
            <p class="body-content">Get this at only £400.</p>
            <div class="review">
            <div class="stars">
                <span class="star full">&#9733;</span>
                <span class="star full">&#9733;</span>
                <span class="star full">&#9733;</span>
                <span class="star half">&#9733;</span>
                <span class="star empty">&#9733;</span>
            </div>
        </div>
            <button class="btn btn-add">Add to Cart</button>
        </div>

        <div class="grid-item">
            <img src="{{asset('images/galaxybook.webp')}}" class="item-image" alt="">
            <h1 class="body-title">Galaxy Book</h1>
            <p class="body-content">Get this at only £400.</p>
            <div class="review">
            <div class="stars">
                <span class="star full">&#9733;</span>
                <span class="star full">&#9733;</span>
                <span class="star full">&#9733;</span>
                <span class="star full">&#9733;</span>
                <span class="star full">&#9733;</span>

            </div>
        </div>
            <button class="btn btn-add">Add to Cart</button>
        </div>
    </div>
    @include('partials.footer')
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="js/nav.js"></script>
    <script src="js/landing.js"></script>
</body>

</html>
