<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">
  <title>Login Screen</title>
</head>
<body>
  @if (session()->has('error'))
  <div style="color: red;">{{ session('error') }}</div>
@endif
  <section>
    <form class="modal-content" id="loginForm"  method="POST" action="{{ route('auth.login') }}">
                @csrf
              <h1>Login</h1>
              <hr class="white-line">
              <div class="inputbox">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter your email" name="email" required="">
              </div>
              <div class="input-box">
                <label for="password"><b>Password</b></label>
                <input type="password" id="password" name="password" placeholder= "Enter your password" required="">  
                <i class="fa-solid fa-eye" id="show-password"></i>  
              </div>
              <div class="forget">
                <label for=""><input type="checkbox" id="rememberMe">Remember Me</label>
                <a href="#"  id="forgotPasswordLink">Forgot Password?</a>
              </div>
              <button  type="submit">Log in</button>
              <div class="register">
                <p>New Member? <a href="/signup" id = "create_account">Create an account</a></p>
              </div>
          </form>
        </section>
        </body>
        </html>
        