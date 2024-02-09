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
            <img class="logo" src="{{ asset('images/Logo.png') }}" alt="Logo">
            <div class="overflow-container">
                <ul class="menu-dropdown">
                    <li><a href="#" onclick="showDashboard()">Dashboard</a><span class="icon"><i class="fa fa-dashboard"></i></span></li>
                    <li><a href="#" onclick="showProducts()">Products</a><span class="icon"><i class="fa fa-heart"></i></span></li>
                    <li><a href="#" onclick="showCustomers()">Customers</a><span class="icon"><i class="fa fa-heart"></i></span></li>
                    <li><a href="#" onclick="showOrders()">Orders</a><span class="icon"><i class="fa fa-heart"></i></span></li>
                    <li><a href="#" onclick="showSettings()">Settings</a><span class="icon"><i class="fa fa-heart"></i></span></li>
                    <!-- Add more sidebar links as needed -->
                </ul>
            </div>
        </nav>
    </div>

    <div class="content">
        <div id="dashboard" style="display: none;">
            <!-- Dashboard content -->
            <h1>Dashboard</h1>
            <p>This is the dashboard content.</p>
        </div>
        <div id="products" style="display: none;">
            <!-- Products content -->
            <h1>Products</h1>
            <p>This is the products content.</p>
            <button class="navbutton"><a href="{{ route('admin.products.create') }}">Create Product</a></button>

        </div>
        <div id="customers" style="display: none;">
            <!-- Customers content -->
            <h1>Customers</h1>
            <p>This is the customers content.</p>
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
        </div>
        <!-- Add more content sections for other pages -->
    </div>
</div>

<script>
    function showDashboard() {
        document.getElementById('dashboard').style.display = 'block';
        document.getElementById('products').style.display = 'none';
        document.getElementById('customers').style.display = 'none';
        document.getElementById('orders').style.display = 'none';
        document.getElementById('settings').style.display = 'none';
    }

    function showProducts() {
        document.getElementById('dashboard').style.display = 'none';
        document.getElementById('products').style.display = 'block';
        document.getElementById('customers').style.display = 'none';
        document.getElementById('orders').style.display = 'none';
        document.getElementById('settings').style.display = 'none';
    }

    function showCustomers() {
        document.getElementById('dashboard').style.display = 'none';
        document.getElementById('products').style.display = 'none';
        document.getElementById('customers').style.display = 'block';
        document.getElementById('orders').style.display = 'none';
        document.getElementById('settings').style.display = 'none';
    }

    function showOrders() {
        document.getElementById('dashboard').style.display = 'none';
        document.getElementById('products').style.display = 'none';
        document.getElementById('customers').style.display = 'none';
        document.getElementById('orders').style.display = 'block';
        document.getElementById('settings').style.display = 'none';
    }

    function showSettings() {
        document.getElementById('dashboard').style.display = 'none';
        document.getElementById('products').style.display = 'none';
        document.getElementById('customers').style.display = 'none';
        document.getElementById('orders').style.display = 'none';
        document.getElementById('settings').style.display = 'block';
    }

    // Show the dashboard content by default on page load
    showDashboard();
</script>
</body>
</html>
