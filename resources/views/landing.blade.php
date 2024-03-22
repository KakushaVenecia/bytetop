

<script src="https://kit.fontawesome.com/4d0aa3dbc2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<title>Landing</title>
@include('partials.navbar')
<div class="slider-container">
  <div class="slider">
    <div class="slide">
      <img src="{{ asset('images/33353.jpg') }}" alt="Image 1">
      <div class="text-overlay">
        <h2>Laptops Catalogues</h2>
        <p> Here you find the Best Laptops.</p>
        <p> Click here to view more...</p>
      </div>
    </div>
    <div class="slide">
      <img src="{{ asset('images/143023.jpg') }}" alt="Image 1">
      <div class="text-overlay">
        <h2>Computers Catalogues</h2>
        <p> Here you find the Best Computers.</p>
        <p> Click here to view more...</p>
      </div>
    </div>
    <div class="slide">
      <img src="{{ asset('images/2150713961.jpg') }}" alt="Image 3">
      <div class="text-overlay">
        <h2>Accessories Catalogues</h2>
        <p> Here you find the Best Accessories.</p>
        <p> Click here to view more...</p>
      </div>
    </div>
    <div class="slide">
      <img src="{{ asset('images/2150706387.jpg') }}" alt="Image 3">
      <div class="text-overlay">
        <h2>Monitors Catalogues</h2>
        <p> Here you find the Best Monitors.</p>
        <p> Click here to view more...</p>
      </div>
    </div>
    <div class="slide">
      <img src="{{ asset('images/all-in-one.jpg') }}" alt="Image 3">
      <div class="text-overlay">
        <h2>All in one Desktops Catalogues</h2>
        <p> Here you find the Best All in one Desktops.</p>
        <p> Click here to view more...</p>
      </div>
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
<script src="js/landing.js"></script>