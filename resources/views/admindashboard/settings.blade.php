@extends('admindashboard.layout')
@section('title', 'Settings')
@section('content')

<link rel="stylesheet" href="{{ asset('css/admin.settings.css') }}">


<div class="user-bar" style="float: right">
                    @if(auth()->check())
                        <p>Hello, {{ auth()->user()->name }}</p>
                    @endif
                </div>
                <h3>Settings</h3>
                <div>



        <div class="tabs">            
            <button class="tablinks" onclick="openTab(event, 'profile')">Profile</button>
            <button class="tablinks" onclick="openTab(event, 'add-bank')">Add Bank</button>
                 
        </div>
        <div class="content_box">
                
        <div id="profile" class="tabcontent">
            
            <div class="card">
        <div class="card-header">User Profile</div>
        <div class="card-body">
            <div class="profile-info">
                <img src="{{asset('images/girl.jpg')}}" alt="Profile Picture" class="profile-picture">
                <input type="file" id="profile-image" accept="image/*">              
                </div>
                <div class="name">
                <label for="name">Name: </label>
            <input type="text" id="name" name="name" placeholder="Name"  required="" style="        width: 60%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;">
                </div>
            <button class="save-button">Save</button>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Email</div>
        <div class="card-body">
        <div class="email">
            <label for="email">Email: </label>
            <input type="text" id="email" name="email" placeholder="Email"  required="" style="        width: 60%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;">
        </div>
        <div class="password">
            <label for="password">Password: </label>
            <input type="text" id="password" name="password" placeholder="Password"  required="" style="        width: 60%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;">
        </div>
           
            <button class="save-button">Save</button>
        </div>
    </div>
        </div>
        
        <div id="add-bank" class="tabcontent">        
    <div class="card">
        <div class="card-header">Add Bank Account or Card</div>
        <div class="card-body">
            <div class="bank-info">
                <i class="fas fa-university"></i>
                <span class="bank-name">Bank of America</span>
                <span class="bank-account-number">***************3628</span>
                <span class="verified">Verified</span>
            </div>
            <button class="manage-button">Manage</button>
            <hr class="separator">
            <div class="card-info">
                <i class="fas fa-credit-card"></i>
                <span class="card-name">Master Card</span>
                <span class="card-number">***************1121</span>
                <span class="verified">Verified</span>
            </div>
            <button class="manage-button">Manage</button>
            <div class="buttons">
                <button class="blue-button">Add New Bank</button>
                <button class="blue-button">Add New Card</button>
            </div>
        </div>
    
</div>
</div>     
    <script src="{{ asset('js/admin.settings.js') }}"></script>   
</html>
@endsection