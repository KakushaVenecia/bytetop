{{-- <!-- register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    <form method="POST" action="{{ route('tosignin') }}">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required>
        @error('name')
            <span>{{ $message }}</span><br>
        @enderror
<br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required>
        @error('email')
            <span>{{ $message }}</span><br>
        @enderror
        <br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required>
        @error('password')
            <span>{{ $message }}</span><br>
        @enderror
        <br>
        <label for="password_confirmation">Confirm Password:</label><br>
        <input type="password" id="password_confirmation" name="password_confirmation" required><br>
        @error('password_confirmation')
            <span>{{ $message }}</span><br>
        @enderror
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div> <h1>Register</h1></div>
    <section>
    

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('tosignin') }}">
            @csrf
            <div class="inputbox">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required>
                @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="inputbox">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required>
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="inputbox">
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="inputbox">
                <label for="password_confirmation">Confirm Password:</label><br>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
                @error('password_confirmation')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit">Register</button>
        </form>
    </section>
</body>
</html>
