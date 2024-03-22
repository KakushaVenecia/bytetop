@extends('admindashboard.layout')
@section('title', 'Settings')
@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link rel="stylesheet" href="{{ asset('css/admin.settings.css') }}">

<div class="search">
<span class="search-icon material-symbols-outlined">search</span>
<input class="search-input" type="search" placeholder="Search">
</div>


<div class="content">  
<div id="settings">
            <!-- Settings content -->
            <h1>Settings</h1>
            <p>This is the settings content.</p>
            <button>Edit Settings</button>
            <a href="{{ route('admin.invite.form') }}"><button>Invite Admins</button></a>
        </div>
</div>

<div class="container">
        <div class="tab_box">
            <button class="tab-btn active">General</button>
            <button class="tab-btn">Profile</button>
            <button class="tab-btn">Add Bank</button>
            <button class="tab-btn">Categories</button>
            <button class="tab-btn">Currencies</button>
            <button class="tab-btn">Support</button>
            <div class="line"></div>
        </div>
        <div class="content_box">
            <div class="content active">
                <h2>General</h2>
                <p>This is general tab</p>
            </div>

            <div class="content">
                <h2>Profile</h2>
                <p>This is Profile tab</p>
            </div>

            <div class="content">
                <h2>Add Bank</h2>
                <p>This is Add bank tab</p>
            </div>

            <div class="content">
                <h2>Categories</h2>
                <p>This is Categories tab</p>
            </div>

            <div class="content">
                <h2>Currencies</h2>
                <p>This is Currencies tab</p>
            </div>

            <div class="content">
                <h2>Support</h2>
                <p>This is Support tab</p>
            </div>
        </div>
    </div>

</html>
@endsection