<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/about.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>About Us Section</title>
</head>
@include('partials.navbar')
<body>
  <div class="container">
    <div class="subtitle">
      <p>One of the UK’s leading digital retailers, we offer more than 10,000 products online</p>
    </div>
    <div class="content">
      <div class="article">
        <h2>We offer Laptops for Every Lifestyle, Every Goal</h2>
        <p>Welcome to ByteTop, your ultimate destination for cutting-edge
        laptop technology and accessories. At ByteTop, we believe in the 
        power of innovation and the seamless integration of technology
        into everyday life.</p>
        <h3>Our Story</h3>
        <p>Established in 2023, ByteTop emerged from a passion for 
          delivering top-quality laptops and related products to tech 
          enthusiasts, professionals, and students alike. Our journey began 
          with a commitment to providing an unparalleled online shopping 
          experience, backed by exceptional customer service.</p>
          <h4>Our Mission</h4>
        <p>At ByteTop, our mission is clear — to empower individuals with the latest and most advanced laptop solutions. We strive to be more than just a marketplace; we want to be your go-to source for everything related to laptops, from high-performance devices to must-have accessories.</p>
        <h5>What Sets Us Apart</h5>
        <p>We handpick the best laptops and accessories to ensure you get only the finest products available in the market.
          Our team of tech enthusiasts is here to provide expert advice, helping you make informed decisions based on your needs and preferences.
          Your satisfaction is our priority. We go the extra mile to deliver a seamless shopping experience, from browsing to checkout and beyond.
        </p>
        <h6>Our Commitment</h6>
        <p>We stand behind the quality of every product we offer. Expect nothing less than excellence when you shop with us.
          Stay ahead of the curve with the latest technological advancements. We are committed to bringing you the newest trends and innovations in the laptop industry.</p>
        
      </div>
          
    </div>
    <div class="containers">
      <h6>Our Team</h6>
      <div class="sub-containers">
        <div class="team">
          <img class="card-img" src="{{ asset('images/male.svg') }}" alt="Mairaj">
          <div class="name">Mairaj Shakeel Khan</div>
          <div class="design">Developer</div>
          <div class="about">Frontend and UI/UX</div>
          <div class="social-link">    
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-github"></a>
          </div>
        </div>
        <div class="team">
          <img class="card-img" src="{{ asset('images/male.svg') }}" alt="MohammadJavad">
          <div class="name">MohammadJavad Aghababaei Beni</div>
          <div class="design">Developer</div>
          <div class="about">Backend</div>
          <div class="social-link">    
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-github"></a>
          </div>
        </div>
        <div class="team">
          <img class="card-img" src="{{ asset('images/male.svg') }}" alt="Morikeh">
          <div class="name">Morikeh Daramy</div>
          <div class="design">Developer</div>
          <div class="about">Backend</div>
          <div class="social-link">    
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-github"></a>
          </div>
        </div>
        <div class="team">
          <img class="card-img" src="{{ asset('images/male.svg') }}" alt="Saikiran">
          <div class="name">Saikiran Surineni</div>
          <div class="design">Developer</div>
          <div class="about">Frontend and UI/UX</div>
          <div class="social-link">    
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-github"></a>
          </div>
        </div>
        <div class="team">
          <img class="card-img" src="{{ asset('images/male.svg') }}" alt="Maneendra">
          <div class="name">Maneendra Reddy Meegada</div>
          <div class="design">Developer</div>
          <div class="about">Frontend and UI/UX</div>
          <div class="social-link">    
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-github"></a>
          </div>
        </div>
        <div class="team">
          <img class="card-img" src="{{ asset('images/female.svg') }}" alt="Venecia">
          <div class="name">Venecia Kakusha</div>
          <div class="design">Developer</div>
          <div class="about">Backend/Scrum Master</div>
          <div class="social-link">    
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-github"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('partials.footer')
      <script src="js/nav.js"></script>
</body>
</html>