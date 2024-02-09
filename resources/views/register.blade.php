<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}"> 
    <title>Register</title>
</head>
<body>
    <h1>Create Account</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form class="modal-content" id="registerForm" method="POST" action="{{ route('auth.register') }}">
        @csrf
        <div class="container">
            <label for="name"><b>Your Name:</b></label><br>
            <input type="text" placeholder="First and last name" name="name" value="{{ old('name') }}" required><br>

            <label for="email"><b>Email:</b></label><br>
            <input type="email" placeholder="Enter your Email" name="email" value="{{ old('email') }}" required><br>

            <label for="password"><b>Create a Password:</b></label><br>
            <input type="password" placeholder="At least 8 characters" name="password" required><br>

            <label for="password_confirmation"><b>Re-enter Password:</b></label><br>
            <input type="password" placeholder="Re-enter Password" name="password_confirmation" required><br>

            <p>By creating an account, you agree to Bytetop's Conditions of Use and Privacy Note. <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
            
            <div class="clearfix">
                <button type="submit" class="emailbtn">Create Account</button>
            </div>
        </div>
    </form>
    <script src="{{ asset('js/signin.js') }}"></script> 
</body>
</html>
