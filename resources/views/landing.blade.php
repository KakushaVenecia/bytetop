<script src="https://kit.fontawesome.com/4d0aa3dbc2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<title>Landing</title>
@include('partials.navbar')
<div class="slider-container">
  <div class="slider">
    <div class="slide">
      <img src="{{ asset('images/33353.jpg') }}" alt="Image 1">
      <div class="text-overlay">
        <h2>Laptops Catalogue</h2>
        <a color="orange" href="{{ route('Laptops') }}"> View Laptops</a>
        <p> Here you find the Best Laptops.</p>
       
      </div>
    </div>
    <div class="slide">
      <img src="{{ asset('images/143023.jpg') }}" alt="Image 1">
      <div class="text-overlay">
        <h2>Computers Catalogues</h2>
        <a color="orange" href="{{ route('Computers') }}"> View Computers</a>
        <p> We will help you choose your best study companion.</p>
       
      </div>
    </div>
    <div class="slide">
      <img src="{{ asset('images/2150713961.jpg') }}" alt="Image 3">
      <div class="text-overlay">
        <h2>Accessories Catalogues</h2>
        <a color="orange" href="{{ route('Accessories') }}"> View Accessories</a>
        <p> Look no further ! We Got you</p>
       
      </div>
    </div>
    <div class="slide">
      <img src="{{ asset('images/2150706387.jpg') }}" alt="Image 3">
      <div class="text-overlay">
        <h2>Monitors Catalogues</h2>
        <a color="orange" href="{{ route('Accessories') }}"> View Accessories</a>
        <p> Best Deals in town</p>
      </div>
    </div>
    <div class="slide">
      <img src="{{ asset('images/all-in-one.jpg') }}" alt="Image 3">
      <div class="text-overlay">
        <h2>All in one Desktops Catalogues</h2>
        <a color="orange" href="{{ route('All-in-one') }}"> Complete Desktops</a>
        <p> Here you find the Best All in one Desktops.</p>
      </div>
    </div>
  </div>
</div>
    <h1>Popular Deals</h1>
    <div class="grid-container">
      @foreach($categories as $category)
          @foreach($categoryProducts[$category] as $product)
              <div class="grid-item">
                  <img src="{{ asset('storage/images/'.$product->image) }}" class="item-image" alt="{{ $product->name }}">
                  <h1 class="body-title">{{ $product->name }}</h1>
                  <p class="body-content">Get this at only £{{ $product->price }}.</p>
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
          @endforeach
      @endforeach
  </div>
            
</div>
   
    </div> 
    @include('partials.footer')
<script src="js/landing.js"></script>