<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}"> 
    <title>Register</title>
</head>
<body>
    @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif

    <form class="modal-content" id="registerForm" method="POST" action="{{ route('auth.register') }}">
        @csrf
        <div class="container">
            <h1>Create Account</h1>
            <label for="name"><b>Your Name:</b></label><br>
            <input type="text" placeholder="First and last name" name="name" value="{{ old('name') }}" required><br>

            <label for="email"><b>Email:</b></label><br>
            <input type="email" placeholder="Enter your Email" name="email" value="{{ old('email') }}" required><br>
            @error('email')
                <span class="error-message">{{ $message }}</span>
            @enderror

            <label for="password"><b>Create a Password:</b></label><br>
            <input type="password" placeholder="At least 8 characters" name="password" id="password" required><br>
            <span class="password-info">Password must be at least 8 characters long.</span>
            @error('password')
                <span class="error-message">{{ $message }}</span>
            @enderror

            <label for="password_confirmation"><b>Re-enter Password:</b></label><br>
            <input type="password" placeholder="Re-enter Password" name="password_confirmation" required><br>
            @error('password_confirmation')
                <span class="error-message">{{ $message }}</span>
            @enderror

            <p>By creating an account, you agree to Bytetop's Conditions of Use and Privacy Note. <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
            
            <div class="clearfix">
                <button type="submit" class="emailbtn">Create Account</button>
            </div>
        </div>
    </form>
    <script src="{{ asset('js/signin.js') }}"></script> 
</body>
</html>
