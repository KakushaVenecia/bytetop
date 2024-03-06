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
        <a href="/products">Products</a>

            <a class="navbutton" href="/cart"> Cart
                <i class="fas fa-shopping-cart"></i> 
                @auth
                    {{-- <span class="cart-count"> {{ $cartItems->count() }}</span> --}}
                @endauth
            </a>
        
        @auth
            <div class="dropdown">
                <button class="navbutton">Account <i class="fas fa-user"></i></button>
                <div class="dropdown-content">
                    <form id="logout-form" action="{{ route('tologout') }}" method="POST">
                        @csrf
                        <button type="submit">
                            <i class="fas fa-sign-out-alt"></i> 
                            Logout
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
</nav>
