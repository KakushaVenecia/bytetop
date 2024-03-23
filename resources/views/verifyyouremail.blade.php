<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <link rel="stylesheet" href="css/verifyyouremail.css">
</head>
<body>
<div class="container">
<div class="logo">
        <a href="/"><img src="/images/Bytetoplogo.png" alt="Logo"></a> 
        </div>
        <h1>Please verify your email</h1>
        <p>
            You're almost there! We sent an email to </p> 
        
            <strong>{{ session('user_email') }}</strong>>
        <p>    
            Just click on the link in the email to complete your signup.
            If you don't see it, please <label> check your spam </label> folder. </p>
        <p>
            Still can't find the email? No problem.
        </p>
        <a class="button" href="mailto:member@email.com">Resend Verification Email</a>
    </div>
</body>
</html>
