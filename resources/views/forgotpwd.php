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
  <p>Enter your email address</p>
  <input type="text" id="email" name="email" placeholder="Email address">
  <p id="error-message" class="error-message"></p>
  <div>
    <button class="continue" onclick="continueClicked()">
      <span>Continue</span>
    </button>

    <div class="Return">
      <a href="#" id="returntologin">Return to login</a>
    </div>

  </div>

  <script src="js/forgotpwd.js"></script>

</body>
</html>
