<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Screen</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <section>
    <form id="loginForm">
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
      <button type="button" onclick="validateLogin()">Log in</button>
      <div class="register">
        <p>New Member? <a href="#" id = "create_account">Create an account</a></p>
      </div>
  </form>
  </section>
  <script src="js/login.js"></script>
</body>
</html>
