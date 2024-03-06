<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<style>
 body {
  background: rgb(96, 145, 163)!important;
  background: linear-gradient(180deg, rgba(96, 145, 163, 1) 40%, rgba(241, 247, 249, 1) 100%);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}
.container {
  width: 350px;
  height: 400px;
  background-color: #001E2C;
  padding: 2px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center; /* Center align content */
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
  width: 100px;
  height:100px;
  margin: 0px;
}
h1{
  margin:0px;
  color: #ffffff;
  margin-bottom: 15px;
}
a{
    margin: 0px;
    color: #fff
}
p{
    color:  #f7890b;
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
</style>
<body>
    <div class="container">
        <h1>Reset Password</h1>
        <p>That's ok, It happens!</p>
    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <label for="email">Email Address</label><br>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Enter Email Adress associated with Account"><br>
        @error('email')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Send Password Reset Link</button>
    </form>

    </div>
    
</body>
</html>
