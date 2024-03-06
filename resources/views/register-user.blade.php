<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css"> 
</head>
<body>
    <div class="modal-content" id="registerForm">
        <div class="container">
            @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <h1>Create Account</h1>
            <form method="POST" action="{{ route('auth.register') }}">
                @csrf
                <label for="name"><b>Your Name:</b></label><br>
                <input type="text" id="name" name="name" placeholder="First and last name" value="{{ old('name') }}" required><br>

                <label for="email"><b>Email:</b></label><br>
                <input type="email" id="email" name="email" placeholder="Enter your Email" value="{{ old('email') }}" required><br>
                <span id="emailError" class="error-message"></span><br>

                <label for="password"><b>Create a Password:</b></label><br>
                <input type="password" id="password" name="password" placeholder="At least 8 characters" required><br>
                <span class="password-info">Password must be at least 8 characters long.</span>
                <span id="passwordError" class="error-message"></span><br>

                <label for="password_confirmation"><b>Re-enter Password:</b></label><br>
                <input type="password" id="passwordConfirmation" name="password_confirmation" placeholder="Re-enter Password" required><br>
                <span id="passwordConfirmationError" class="error-message"></span><br>

                <p>By creating an account, you agree to Bytetop's Conditions of Use and Privacy Note. <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                
                <div class="clearfix">
                    <button type="submit" class="emailbtn">Create Account</button>
                </div>
            </form>
        </div>
    </div>


    <script></script> 
</body>
</html>
