<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    
</head>
<body>
    <div class="container"> 
        <div class="logo">
            <img src="/images/Logo.png" alt="Logo">
        </div>
        <form method="POST" action="{{ route('tosignin') }}">
            <h1>Register</h1>
            @csrf
            <div>
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required>
                @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div >
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required>
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div >
                <label for="password_confirmation">Confirm Password:</label><br>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
                @error('password_confirmation')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>