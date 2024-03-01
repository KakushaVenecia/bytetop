<nav>
    <div class="left">
        <a href="{{ route('landing') }}"> 
            <img class="logo" src="images/Logo.png" alt="Logo">
        </a>
    </div>
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search...">
        <button onclick="performSearch()">Search</button>
    </div>
    
    <div id="searchResults"></div>

    <div class="nav-links">
        <button class="navbutton"><a href="/about">About Us</a></button>
        <button class="navbutton"><a href="/products">Products</a></button>
        <button class="navbutton" id="cartButton">
            <a href="/cart">Cart</a>
            <button class="navbutton"><a href="/cart">Cart</a><span id="cartCount" class="cart-count">{{ session('cart_count', 0) }}</span></button>
        </button>
    </div>

    <div class="right">
        @if(session('authenticated'))
            <!-- User is logged in -->
            <span class="me-3">Welcome, {{ explode(' ', session('user_name'))[0] }}</span>
            <form id="logout-form" action="{{ route('tologout') }}" method="POST">
                @csrf
                <button class="navbutton" type="submit">Logout</button>
            </form>
        @else
            <!-- User is not logged in -->
            <button class="navbutton"><a href="/login">Log In</a></button>
            <button class="navbutton"><a href="/signup">Sign Up</a></button>
        @endif
    </div>
</nav>

