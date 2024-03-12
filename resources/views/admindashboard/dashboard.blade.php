<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title>Bytetop</title>
</head>
<body>
<div class="container">
    <div class="primary-nav"> 
        <nav role="navigation" class="menu">
            <div>
                <img class="logo" src="{{ asset('images/Logo.png') }}" alt="Logo">
            </div>
            <div class="overflow-container">
                <ul class="menu-dropdown">
                    <li><a href="#" onclick="showDashboard()">Dashboard</a><span class="icon"><i class="fa fa-dashboard"></i></span></li>
                    <li><a href="#" onclick="showProducts()">Products</a><span class="icon"><i class="fa fa-heart"></i></span></li>
                    <li><a href="#" onclick="showCustomers()">Customers</a><span class="icon"><i class="fa fa-heart"></i></span></li>
                    <li><a href="#" onclick="showOrders()">Orders</a><span class="icon"><i class="fa fa-heart"></i></span></li>
                    <li><a href="#" onclick="showSettings()">Settings</a><span class="icon"><i class="fa fa-heart"></i></span></li>
                    <li><a href="#" onclick="showNotifications()">Notifications</a><span class="icon"><i class="fa fa-heart"></i></span></li>
                    <!-- Add more sidebar links as needed -->
                </ul>
            </div>
        </nav>
    </div>

    <div class="content">
        <div id="dashboard" style="display: none;">
            <div class="user-bar" style="float: right">
                @if(auth()->check())
                    <p>Hello, {{ auth()->user()->name }}</p>
                @endif
            </div>
            <!-- Dashboard content -->
            <h1>Dashboard</h1>
            <button class="navbutton"><a href="{{ route('admin.products.create') }}">Create Product</a></button>
            <p>This is the dashboard content.</p>
            <h2>Products: {{ $productCount }}</h2>
            {{-- <button><a href=""> Create Product</a></button> --}}
            <button><a href="/productpage">Go to the products page</a></button>
        </div> 
        <div id="products">
            <h1>Products</h1>
            <div class="flex-table">
                @foreach($uniqueProductNames as $name)
                    @php
                        $product = $products->firstWhere('name', $name);
                        $totalStock = $products->where('name', $name)->sum('quantity');
                    @endphp
                    <div class="flex-row">
                        <div class="flex-cell">
                            <img width="100" src="{{ asset('storage/images/' . $product->image) }}" alt="Product Image">
                        </div>
                        <div class="flex-cell">
                            <strong>{{ $product->name }}</strong>
                        </div>
                        <div class="flex-cell">
                            Description: {{ $product->description }} <br>
                            Price: {{ $product->price }} <br>
                            Tags: {{ $product->tags }} <br>
                            Category: {{ $product->category }} <br>
                        </div>
                        <div class="flex-cell">
                            Stock: {{ $productCounts[$name] }}
                        </div>
                        <div class="flex-cell">
                            <form action="{{ route('admin.products.edit', $product->id) }}" method="GET">
                                @csrf
                                <button type="submit" class="navbutton edit-button">Edit Product</button>
                            </form>
                            <!-- Add delete form -->
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="navbutton" onclick="return confirm('Are you sure you want to delete this product?')">Delete Product</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $products->links() }}
        </div>
        
          

            
        <div id="customers" style="display: none;">
            <!-- Customers content -->
            <h1>Customers</h1>
            <p>This is the customers content.</p>
            @foreach ($users as $user)
                <div>
                    <h2>{{ $user->name }}</h2>
                    <p>Email: {{ $user->email }}</p>
                    <p>Role: {{ $user ->role }}</p>
                    <!-- Add other customer details here -->
                </div>
            @endforeach
        </div>
        
        <div id="orders" style="display: none;">
            <!-- Orders content -->
            <h1>Orders</h1>
            <p>This is the orders content.</p>
        </div>
        
        <div id="settings" style="display: none;">
            <!-- Settings content -->
            <h1>Settings</h1>
            <p>This is the settings content.</p>
            <button>Edit Settings</button>
            <button>Invite Admins</button>
        </div>
        
        <div id="notifications" style="display: none;">
            <!-- Notifications content -->
            <h1>Notifications</h1>
            <p>This is the notifications content.</p>
        </div>
    </div>
</div>

<script>
    function showDashboard() {
        hideAll();
        document.getElementById('dashboard').style.display = 'block';
    }
    function showProducts() {
        hideAll();
        document.getElementById('products').style.display = 'block';
    }
    function showCustomers() {
        hideAll();
        document.getElementById('customers').style.display = 'block';
    }
    function showOrders() {
        hideAll();
        document.getElementById('orders').style.display = 'block';
    }
    function showSettings() {
        hideAll();
        document.getElementById('settings').style.display = 'block';
    }
    function showNotifications() {
        hideAll();
        document.getElementById('notifications').style.display = 'block';
    }
    function hideAll() {
        document.getElementById('dashboard').style.display = 'none';
        document.getElementById('products').style.display = 'none';
        document.getElementById('customers').style.display = 'none';
        document.getElementById('orders').style.display = 'none';
        document.getElementById('settings').style.display = 'none';
        document.getElementById('notifications').style.display = 'none';
    }
    // Show the dashboard content by default on page load
    // showDashboard();

    function reloadPage(page) {
        window.location.href = '{{ url()->current() }}?page=' + page;
    }
</script>

</body>
</html>
