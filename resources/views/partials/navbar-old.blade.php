{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nav</title>
    <script src="https://kit.fontawesome.com/4d0aa3dbc2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/nav.css">
</head>
<body>
   <nav>
    <div class="logo" href="{{ route('landing') }}"> 
        <img class="logo" src="/images/Logo.png" alt="Logo">
    </div>
    
    <div class="search-container">
        <input type="text" id="searchInput" class="search-input" placeholder="Search...">
        <button class="search-button" onclick="performSearch()">
            <i class="fas fa-search"></i> <!-- Font Awesome search icon -->
        </button>
    </div>
    
    <div class="nav-links"> 
        {{-- <a href="/about">About Us</a> --}}
        {{-- <a href="/products">Products</a>

        <a href="/cartpage"> Cart
            <i class="fas fa-shopping-cart"></i> 
            @auth
                {{-- <span class="cart-count"> {{ $cartItems->count() }}</span> --}}
            {{-- @endauth
        </a>
        
        @auth  --}}
            {{-- <div class="dropdown"> --}}
                {{-- <button class="navbutton">Hello, {{ auth()->user()->name }} <i class="fas fa-user"></i></button>
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
            </div> --}}
        {{-- @else
            <div>
                <a href="/login"><i class="fas fa-sign-in-alt"></i> Log In</a>
                <a href="/register"><i class="fas fa-user-plus"></i> Sign Up</a>
            </div>
        @endauth
    </div>
</nav>

</body>
</html> --}}