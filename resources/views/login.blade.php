

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4d0aa3dbc2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
  
    <div class="container"> 
      
        <div class="logo">
        <a href="/" ><img src="/images/Bytetoplogo1.png" alt="Logo"></a> 
        </div>
    <div>
    <h1 id="loginText">Login_</h1>
  </div>
    
    <form method="POST" action="{{ route('tologin') }}">
        @csrf
       <div>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required placeholder="Enter your Email">
        <br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required placeholder="Enter Your password">
        <br>
        @if (session()->has('error'))
        <div style="color: red;">{{ session('error') }}</div>
        @endif
       </div>
       <button type="submit">Login</button>
      
        <div class="info">
            No Account ? <a  href="{{ route('register') }}">Create an Account with us</a>
        </div>
        <div class="info">
           Forgot Password? <a  href="{{ route('password.request') }}">Click Here</a>
        </div>
    </form>
    </div>
</body>
<script src="js/login.js"></script>
</html>
