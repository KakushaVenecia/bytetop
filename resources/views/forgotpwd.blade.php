<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <link rel="stylesheet" type="text/css" href="css/forgotpwd.css">
  <style>
    .error-message {
      color: red;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Forgot</h2>
  <h3>Password</h3>
  <hr class="white-line">

  <p>That's ok, It happens!</p>
  <form method="POST" action="{{ route('forgot-password') }}">
    @csrf 
    <p>Enter your email address</p>
    <input type="email" id="email" name="email" placeholder="Email address">
    <p id="error-message" class="error-message">@error('email') {{ $message }} @enderror</p>
    <div>
      <button class="continue" type="submit">
        <span>Continue</span>
      </button>
    </div>
  </form>

  <div class="Return">
    {{-- <a href="{{ route('login') }}" id="returntologin">Return to login</a> --}}
  </div>
</div>

</body>
</html>
