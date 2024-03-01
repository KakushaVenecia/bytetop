<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <h2>Reset Password</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">
        <label for="email">Email Address</label><br>
        <input type="email" id="email" name="email" value="{{ $email }}" required><br>

        <label for="password">New Password</label><br>
        <input type="password" id="password" name="password" required><br>

        <label for="password_confirmation">Confirm New Password</label><br>
        <input type="password" id="password_confirmation" name="password_confirmation" required><br>

        <button type="submit">Reset Password</button>
    </form>
</body>
</html>
