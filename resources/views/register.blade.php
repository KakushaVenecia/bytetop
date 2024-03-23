<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://kit.fontawesome.com/4d0aa3dbc2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">  
</head>
<body>
    <div class="container"> 
        <div class="logo">
        <a href="/" ><img src="/images/Bytetoplogo.png" alt="Logo"></a> 
        </div>
        <h1 id="signinText">Register_</h1>
        <form method="POST" action="{{ route('tosignin') }}">
            @csrf
            <div class="input">
                <label for="name">Full Name</label><br>
                <input type="text" id="name" name="name" required placeholder="Enter your Full Name">
              
                @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div  class="input">
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" required placeholder="Enter your Email">
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div  class="input">
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required placeholder="Minimum 8 characters">
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div  class="input">
                <label for="password_confirmation">Confirm Password:</label><br>
                <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirm password">
                @error('password_confirmation')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">Register</button>
            <div class="info">
                Have an Account? <a href="{{ route('login') }}">Login</a>
            </div>
        </form>
    </div>
</body>
</html>