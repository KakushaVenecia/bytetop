<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4d0aa3dbc2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <title>@yield('title')</title>
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
                    <li><a href="{{ route('dashboard') }}">Dashboard</a><span class="icon"><i class="fa fa-dashboard" style="color:orange"></i></span></li>
                    <li><a  href="{{ route('admin.viewproducts') }}">Products</a><span class="icon"><i class="fa-solid fa-bag-shopping" style="color:orange"></i></i></span></li>
                    <li><a href="{{ route('admin.viewusers') }}">Users</a><span class="icon"><i class="fa-solid fa-users" style="color:orange"></i></span></li>
                    <li><a href="{{ route('admin.vieworders') }}" >Orders</a><span class="icon"><i class="fa-solid fa-truck-fast" style="color:orange"></i></span></li>
                    <li><a href="{{ route('admin.viewsettings') }}">Settings</a><span class="icon"><i class="fa-solid fa-gear" style="color:orange"></i></span></li>
                    <li><a href="{{ route('admin.viewnotifications') }}">Notifications</a><span class="icon"><i class="fa-solid fa-envelope" style="color:orange"></i></span></li>
                    <li><a href="{{ route('admin.viewreports') }}">Reports</a><span class="icon"><i class="fa-solid fa-file" style="color:orange"></i></span></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>