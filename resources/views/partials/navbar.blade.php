<nav>
    <div class="left">
        <img class="logo" src="images/Logo.png" alt="Logo">
    </div>

    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search...">
        <button onclick="performSearch()">Search</button>
    </div>
    
    <div id="searchResults"></div>

    <div class="nav-links">
        <button class="navbutton"><a href="/about">About Us</a></button>
        <button class="navbutton"><a href="/products">Products</a></button>
    </div>

    <div class="right">
        @if(auth()->check())
            <!-- User is logged in -->
            <span class="me-3">Welcome, {{ auth()->user()->name }}</span>
            <button class="navbutton"><a href="/cart">Cart</a></button>
            <button class="navbutton"><a href="{{ route('logout') }}">Logout</a></button>
        @else
            <!-- User is not logged in -->
            <button class="navbutton"><a href="/login">Log In</a></button>
            <button class="navbutton"><a href="/signup">Sign Up</a></button>
        @endif
    </div>
</nav>
