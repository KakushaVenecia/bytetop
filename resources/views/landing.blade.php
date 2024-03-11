<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}"> --}}
  
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
</head>

<body>
    @include('partials.navbar')
   
    <!-- <img class="slide" src="{{asset('images/header.webp')}}" alt="" srcset=""> -->

   
    <section class="hero">
    <link rel="preload" as="image" href="https://source.unsplash.com/300x360?0" />
    <link rel="preload" as="image" href="https://source.unsplash.com/300x360?1" />
    <link rel="preload" as="image" href="https://source.unsplash.com/300x360?2" />

  
    <div class="content-hero">
      <h1>ByteTop</h1>
      <p>Get Amazing Products at Student Friendly Pricesr</p>
      <a href="#" class="btn">Browse our cataloge</a>
    </div>
  </section>
    <div class="container">
        <h1>Product Catalogue</h1>
        <div class="deals">
            <div class="card">
                <h3><b>Laptop Product Catalogue</b></h3>
                <img class="card-img" src="{{ asset('images/Hp_Laptop.jpeg') }}" alt="Hp laptop">
                <div class="more">
                    <button  class="btn btn-add">View More</button>
                </div>
            </div>
            <div class="card">
                <h3><b>PC Product Catalogue</b></h3>
                <img class="card-img" src="{{ asset('images/PC.jpeg') }}" alt="PC">
                <div class="more">
                    <button  class="btn btn-add">View More</button>
                </div>
            </div>
            <div class="card">
                <h3><b>Accesories Product Catalogue</b></h3>
                <img class="card-img" src="{{ asset('images/Keyboard.webp') }}" alt="keyboard">
                <div class="more">
                    <button class="btn btn-add">View More</button>
                </div>
            </div>
        </div>
    </div>
    <h1>Popular Deals</h1>
    <div class="grid-container">
        <div class="grid-item">
            <img src="{{asset('images/galaxybook.webp')}}" class="item-image" alt="">
            <h1 class="body-title">Galaxy Book</h1>
            <p class="body-content">Get this at only 400 Pounds.</p>
            <p class="body-content">Rating. 4.6/5</p>
            <button class="btn btn-add">Add to Cart</button>
        </div>
        <div class="grid-item">
            <img src="{{asset('images/Lenovoyoga.webp')}}" class="item-image" alt="">
            <h1 class="body-title">Lenovo Yoga</h1>
            <p class="body-content">Get this at only 800 Pounds.</p>
            <p class="body-content">Rating. 4.7/5</p>
            <button class="btn btn-add">Add to Cart</button>
        </div>
         <div class="grid-item">
        <img src="{{asset('images/hpenvy.webp')}}" class="item-image" alt="">
        <h1 class="body-title">HP Envy</h1>
        <p class="body-content">Get this at only 400 Pounds.</p>
        <p class="body-content">Rating. 4.8/5</p>
        <button class="btn btn-add">Add to Cart</button>
        </div>
        <div class="grid-item">
            <img src="{{asset('images/Lenovoyoga.webp')}}" class="item-image" alt="">
            <h1 class="body-title">Lenovo Yoga</h1>
            <p class="body-content">Get this at only 800 Pounds.</p>
            <p class="body-content">Rating. 4.7/5</p>
            <button class="btn btn-add">Add to Cart</button>
        </div>
        <div class="grid-item">
            <img src="{{asset('images/hpenvy.webp')}}" class="item-image" alt="">
            <h1 class="body-title">HP Envy</h1>
            <p class="body-content">Get this at only 400 Pounds.</p>
            <p class="body-content">Rating. 4.8/5</p>
            <button class="btn btn-add">Add to Cart</button>
        </div>
        <div class="grid-item">
            <img src="{{asset('images/galaxybook.webp')}}" class="item-image" alt="">
            <h1 class="body-title">Galaxy Book</h1>
            <p class="body-content">Get this at only 400 Pounds.</p>
            <p class="body-content">Rating. 4.6/5</p>
            <button class="btn btn-add">Add to Cart</button>
        </div>
    </div>
    @include('partials.footer')
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="js/nav.js"></script>
</body>

</html>
