<script src="https://kit.fontawesome.com/4d0aa3dbc2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/nav.css') }}">
<title>Navigation</title>
<nav class="navbar">
  <div class="navcontainer">
      <div class="navbar-brand">
          <div class="logo">
              <a href="{{ route('landing') }}">
                  <img class="logo1" src="/images/Bytetoplogo1.png" alt="Logo">
              </a>
          </div>
      </div> 
      <ul class="navbar-nav ml-auto">
        @if(auth()->check())
            @if(auth()->user()->role === 'super_admin')
                <li class="navbar-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Go to your Dashboard</a>
                </li>
            @elseif(auth()->user()->role === 'admin')
                <li class="navbar-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Go to Admin Dashboard</a>
                </li>
            @endif
        @endif
    </ul>
      <ul class="navbar-menu">
        <li class="navbar-item"><a href="/about">About</a></li>
        {{-- <li class="navbar-item"><a href="/contactus">Contact Us</a></li> --}}
        <li class="navbar-item">
            <form method="post" action="{{ route('search') }}">
                @csrf
                <div class="navbar-search">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" name="search" class="search-input" placeholder="Search for products.." required>
                </div>
            </form>
        </li>
          <li class="navbar-item dropdown">
              <a href="#" id="products-link">Shop our Products</a>
              <div class="dropdown-menu" id="products-dropdown">
                  <a href="{{ route('Laptops') }}">Laptops</a>
                  <a href="{{ route('Computers') }}">Computers</a>
                  <a href="{{ route('Accessories') }}">Accessories</a>
                  <a href="{{ route('Monitors') }}">Monitors</a>
                  <a href="{{ route('All-in-one') }}">All in one Desktops</a>
              </div>
          </li>   
          <li class="navbar-item dropdown">
            <div class="navbar-profile">
              @auth
                  <div class="dropdown">
                      <button class="navbutton dropdown-toggle" id="profile-dropdown" aria-haspopup="true" aria-expanded="false">
                          Hello, {{ auth()->user()->name }}
                      </button>
                      <div class="dropdown-menu" aria-labelledby="profile-dropdown">
                          <a class="dropdown-item" href="/account"><i class="fas fa-user"></i> My Account</a>
                          <form id="logout-form" action="{{ route('tologout') }}" method="POST">
                              @csrf
                              <button class="dropdown-item logout-btn" type="submit">
                                  <i class="fas fa-sign-out-alt"></i> Logout
                              </button>
                          </form>
                      </div>
                  </div>
              @else
                  <div>
                      <a href="/login"><i class="fas fa-sign-in-alt"></i> Log In</a>
                      <a href="/register"><i class="fas fa-user-plus"></i> Sign Up</a>
                  </div>
              @endauth
                </div>          
          </li>
      </ul>
      <div class="navbar-cart">
        <a href="/cartpage"><i class="fas fa-shopping-cart"></i><span class="cart-count">{{ $cartCount }}</span></a>
      </div>
  </div>
</nav>
