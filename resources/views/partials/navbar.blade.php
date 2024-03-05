
 <nav>
    <div class="logo" href="{{ route('landing') }}"> 
        <img class="logo" src="/images/Logo.png" alt="Logo">
    </div>
    
    <div class="search-container">
        <input type="text" id="searchInput" class="search-input" placeholder="Search...">
        <button class="search-button" onclick="performSearch()">
            <x-bi-search/>
        </button>
    </div>
    
    <div class="nav-links">
        {{-- <a href="/about">About Us</a> --}}
        <a href="/products">Products</a>
        {{-- <div class="dropdown"> --}}
            <a class="navbutton" href="/cart">Cart 
                @auth
                    <span class="cart-count"> {{ $cartItems->count() }}</span>
                    <x-bi-bell-fill/>
                @endauth
            </a>
        {{-- </div> --}}
        
        @auth
            <div class="dropdown">
                <button class="navbutton">Account <i class="fas fa-user"></i></button>
                <div class="dropdown-content">
                    <form id="logout-form" action="{{ route('tologout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
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

