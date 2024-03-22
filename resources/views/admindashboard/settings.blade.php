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

<div class="content">
    <div id="settings">
        <div class="tabs">            
            <button class="tablinks" onclick="openTab(event, 'profile')">Profile</button>
            <button class="tablinks" onclick="openTab(event, 'add-bank')">Add Bank</button>
                 
        </div>
        <div class="content_box">
                
        <div id="profile" class="tabcontent">
            <h1>Profile Settings</h1>
            <div class="card">
        <div class="card-header">User Profile</div>
        <div class="card-body">
            <div class="profile-info">
                <img src="path_to_your_profile_picture" alt="Profile Picture" class="profile-picture">
                <input type="file" id="profile-image" accept="image/*">
                <label for="profile-image" class="choose-file">Choose File</label>
                <input type="text" id="full-name" placeholder="Full Name">
            </div>
            <button class="save-button">Save</button>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Email</div>
        <div class="card-body">
            <input type="email" id="new-email" placeholder="New Email">
            <input type="password" id="new-password" placeholder="New Password">
            <button class="save-button">Save</button>
        </div>
    </div>
        </div>
        
        <div id="add-bank" class="tabcontent">
            <h1>Add Bank Settings</h1>
            <p>This is the add bank settings content.</p>
        </div>
        
        
    </div>
</div>  
    <script src="{{ asset('js/admin.settings.js') }}"></script>   
</html>
@endsection