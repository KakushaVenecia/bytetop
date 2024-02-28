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
        <div class="user-bar">
            @if(auth()->check())
                <p>Hello, {{ auth()->user()->name }}</p>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @endif
        </div>

        <div id="dashboard" style="display: none;">
            <!-- Dashboard content -->
            <h1>Dashboard</h1>
            <button class="navbutton"><a href="{{ route('admin.products.create') }}">Create Product</a></button>
   
            <p>This is the dashboard content.</p>
            <h2>Products: {{ $productCount }}</h2>
            <button><a href="/products">Go to the products page</a></button>
        </div>
        <div id="products">
    <!-- Products content -->
    <h1>Products</h1>

    @if(count($products) > 0)
        <ul>
            @foreach($products as $product)
                <li>
                <img width="100" src="{{ asset('storage/images/' . $product->image) }}" alt="Product Image"> <br />
                    <strong>{{ $product->name }}</strong><br>
                    Description: {{ $product->description }}<br>
                    Price: {{ $product->price }}<br>
                    Tags: {{ $product->tags }}<br>
                    Category: {{ $product->category }}<br>

                    <!-- Add more fields as needed -->
                    <button class="navbutton edit-button" data-product-id="{{ $product->id }}">Edit Product</button>

                    <!-- Add delete form -->
                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="navbutton" onclick="return confirm('Are you sure you want to delete this product?')">Delete Product</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>No products found.</p>
    @endif

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
    <!-- Orders content -->
    <h1>Notifications</h1>
    <p>This is the Notification content.</p>
</div>
<div>
        
        <!-- Add more content sections for other pages -->
    </div>
</div>
</div>

<script>
    function showDashboard() {
        document.getElementById('dashboard').style.display = 'block';
        document.getElementById('products').style.display = 'none';
        document.getElementById('customers').style.display = 'none';
        document.getElementById('orders').style.display = 'none';
        document.getElementById('settings').style.display = 'none';
        document.getElementById('notifications').style.display = 'none';
    }
    function showProducts() {
        document.getElementById('dashboard').style.display = 'none';
        document.getElementById('products').style.display = 'block';
        document.getElementById('customers').style.display = 'none';
        document.getElementById('orders').style.display = 'none';
        document.getElementById('settings').style.display = 'none';
        document.getElementById('notifications').style.display = 'none';
    }
    function showCustomers() {
        document.getElementById('dashboard').style.display = 'none';
        document.getElementById('products').style.display = 'none';
        document.getElementById('customers').style.display = 'block';
        document.getElementById('orders').style.display = 'none';
        document.getElementById('settings').style.display = 'none';
        document.getElementById('notifications').style.display = 'none';
    }
    function showOrders() {
        document.getElementById('dashboard').style.display = 'none';
        document.getElementById('products').style.display = 'none';
        document.getElementById('customers').style.display = 'none';
        document.getElementById('orders').style.display = 'block';
        document.getElementById('settings').style.display = 'none';
        document.getElementById('notifications').style.display = 'none';
    }
    function showSettings() {
        document.getElementById('dashboard').style.display = 'none';
        document.getElementById('products').style.display = 'none';
        document.getElementById('customers').style.display = 'none';
        document.getElementById('orders').style.display = 'none';
        document.getElementById('settings').style.display = 'block';
        document.getElementById('notifications').style.display = 'none';
    }
    function showNotifications() {
        document.getElementById('dashboard').style.display = 'none';
        document.getElementById('products').style.display = 'none';
        document.getElementById('customers').style.display = 'none';
        document.getElementById('orders').style.display = 'none';
        document.getElementById('settings').style.display = 'none';
        document.getElementById('notifications').style.display = 'block';
    }
    // 
    // Add other show functions as needed

    // Show the dashboard content by default on page load
    showDashboard();
    
    document.addEventListener('DOMContentLoaded', function() {
    const editButtons = document.querySelectorAll('.edit-button');

    editButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            console.log('Edit button clicked');

            // Extract the product ID from the data-product-id attribute
            const productId = button.getAttribute('data-product-id');

            // Redirect to the product edit page
            window.location.href = '/admin/products/' + productId + '/edit';
        });
    });
});



</script>

</body>
</html>
