<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
        }

        .container {
            width: 400px;
            height: fit-content;
            background-color: #001E2C;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: white;
        }

        form {
            text-align: center;
            padding: 10px;
            color: white;
        }

        h1 {
            margin: 0px;
            color: #ffffff;
            margin-bottom: 15px;
        }

        label {
            margin-bottom: 5px;
            color: #ffffff;
        }

        input {
            width: 80%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #00668A;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 50%;
            opacity: 0.9;
            border-radius: 50px;
            text-align: center;
            justify-content: center;
        }

        button:hover {
            background-color: #f7890b;
        }

        .error-message {
            color: red !important;
            font-size: 12px;
        }

        .success-message {
            color: red !important;
            font-size: 12px;
        }

        .info {
            padding: 5px;
            color: #fff;
            font-weight: 300;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reset Password</h1>
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
    </div>
</body>
</html>
