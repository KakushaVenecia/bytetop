<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Screen</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <section>
            <form>
                <h1>Login</h1>
                <div class="inputbox">
                <ion-icon name = "mail-outline"></ion-icon>
                <input type= "email" requried>
                <label for="">Email</label>
               <!-- <input type="email" id="email" placeholder="Enter your email"> -->
            </div>
            <div class="inputbox">
                <ion-icon name = "lock-closed-outline"></ion-icon>
                <input type= "password" requried>
                <label for="">Password</label>
               <!-- <input type="password" id="password" placeholder="Enter your password"> -->
            </div>
            <div class="forget">
                <label for=""><input type="checkbox">Remember Me</label>
                <a href="#">Forgot Password?</a>
            </div>  
            <button>Log in</button> 
            <div class="register"> 
                <p>New Member? <a href="#">Register</a></p>
            </div>
        </form>
    <section>
    <script src="js/login"></script>
</body>
</html>
