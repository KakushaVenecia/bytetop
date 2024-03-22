
  <script src="https://kit.fontawesome.com/4d0aa3dbc2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
</head>
<body>
  <nav class="navbar">
    <div class="navcontainer">
      <div class="navbar-brand">
        <div class="logo">
            <a href="{{ route('landing') }}">
                <img class="logo1" src="/images/Bytetoplogo.png" alt="Logo">
            </a>
        </div>
      </div>
      <ul class="navbar-menu">
        <li class="navbar-item">
            <div class="navbar-search">
              <i class="fas fa-search search-icon"></i>
              <input type="text" class="search-input" placeholder="Search...">
            </div>
          </li>
        <li class="navbar-item dropdown">
            <a href="#" id="products-link">Shop</a>
            <div class="dropdown-menu" id="products-dropdown">
                <a href="{{ route('Laptops') }}">Laptops</a>
                <a href="{{ route('Computers') }}">Computers</a>
                <a href="{{ route('Accessories') }}">Accessories</a>
                <a href="{{ route('Monitors') }}">Monitors</a>
                <a href="{{ route('All-in-one') }}">All in one Desktops</a>
            </div>
        </li>   
        <li class="navbar-item"><a href="/about">About</a></li>
        
      </ul>
      <div class="navbar-profile">
        @auth
        <div class="dropdown">
            <a class="navbutton">Hello, {{ auth()->user()->name }}</a>
            <div class="dropdown-content">
                <div class="dropdown-links">
                    <a href="/account"><i class="fas fa-user"></i> My Account</a>
                    <form id="logout-form" action="{{ route('tologout') }}" method="POST">
                        @csrf
                        <button type="submit">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @else
        <div>
            <a href="/login"><i class="fas fa-sign-in-alt"></i> Log In</a>
            <a href="/register"><i class="fas fa-user-plus"></i> Sign Up</a>
        </div>
    @endauth
      </div>
      <div class="navbar-cart">
        <a href="/cartpage"><i class="fas fa-shopping-cart"> </i>
         {{-- @auth --}} {{-- <span class="cart-count"> {{ $cartItems->count() }}</span> --}} {{-- @endauth---}}
        </a>
      </div>
    </div>
  </nav>

