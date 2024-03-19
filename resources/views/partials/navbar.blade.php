<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <title>Navigation</title>
</head>
<body>

<nav>
    <div class="logo">
        <a href="{{ route('landing') }}">
            <img class="logo" src="/images/Logo.png" alt="Logo">
        </a>
    </div>
    
    <div class="search-container">
        <input type="text" id="searchInput" class="search-input" placeholder="Search...">
        <button class="search-button" onclick="performSearch()">
            <i class="fas fa-search"></i> <!-- Font Awesome search icon -->
        </button>
    </div>
    
    <div class="nav-links"> 
        <div class="dropdown">
            <a href="/products" class="dropbtn">Products</a>
            <div class="dropdown-content">
                <a href="/laptops">Laptops</a>
                <a href="/pcs">Computers</a>
                <a href="/accessories">Accessories</a>
            </div>
        </div>
        <a href="/cartpage">Cart <i class="fas fa-shopping-cart"></i></a>
        
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
</nav>
<script src="js/nav.js"></script>
</body>
</html>
