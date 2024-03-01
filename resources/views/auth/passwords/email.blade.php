<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <h2>Reset Password</h2>

    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <label for="email">Email Address</label><br>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required><br>
        @error('email')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Send Password Reset Link</button>
    </form>
</body>
</html>
