<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://kit.fontawesome.com/4d0aa3dbc2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">  
</head>
<style>
    body {
  background: rgb(96,145,163);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}
.container {
  width: 400px;
  height: fit-content;
 background: rgba( 0, 30, 44, 0.65 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
  backdrop-filter: blur( 15.5px );
  -webkit-backdrop-filter: blur( 15.5px );
   background:#001E2C;
  border-radius: 10px;
  padding: 10px;
  text-align: center; 
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
form {
    padding:10px;
  width: 100%;
  height: fit-content; 
}
img {
  width: 150px;
  height:100px;
  margin: 0px;
}
h1{
  margin:0px;
  color: #ffffff;
  margin-bottom: 15px;
  text-align: center;
}
a{
    margin: 0px;
    color: #fff
}

label {
  margin-bottom: 5px;
  color: #ffffff;
}
input {
  width: 80%; /* Set input width to 80% of form width */
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
  color: red;
  font-size: 12px;
}
.info{
    padding: 5px;
    color: #fff;
    font-weight: 300;
}

#signinText {
  overflow: hidden; /* Ensures that the text doesn't overflow */
  border-right: 2px solid rgb(255, 255, 255); /* Simulate typing cursor */
  white-space: nowrap; /* Prevents text from wrapping */
  animation: typing 3s steps(7, end), untyping 3s steps(6, end) 3s infinite;
}

@keyframes typing {
  from {
    width: 0;
  }
  to {
    width: 5em; /* Adjust the width  */
  }
}

@keyframes untyping {
  from {
    width: 3em; /* Adjust the width  */
  }
  to {
    width: 0;
  }
}
</style> 

<body>
    <div class="container"> 
        <div class="logo">
        <a href="/" ><img src="/images/Bytetoplogo.png" alt="Logo"></a> 
        </div>
        <h1 id="signinText">Register_</h1>
        <form method="POST" action="{{ route('tosignin') }}">
            @csrf
            <div class="input">
                <label for="name">Full Name</label><br>
                <input type="text" id="name" name="name" required placeholder="Enter your Full Name">
                @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div  class="input">
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" required placeholder="Enter your Email">
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div  class="input">
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required placeholder="Enter your Password">
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div  class="input">
                <label for="password_confirmation">Confirm Password:</label><br>
                <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirm password">
                @error('password_confirmation')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">Register</button>
            <div class="info">
                Have an Account? <a href="{{ route('login') }}">Login</a>
            </div>
        </form>
    </div>
    <script src="js/login.js"></script>
</body>
</html>