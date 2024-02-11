<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification - Bytetop</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="verification-section">
        <form class="modal-content" action="/verify_email.php" method="post">
            <div class="container">
                <h1>Email Verification</h1>
                <label for="verification-code"><b>Enter Verification Code</b></label>
                <p>To verify your email, we've sent a Verification code to userbytetop@gmail.com </p>
                <!-- <input type="text" placeholder="Enter the code sent to your email" name="verification-code" required> -->
                
                <!-- <div class="clearfix">
                    <button type="submit" class="emailbtn">Verify Email</button>
                </div> -->

                <p>Already have an account? <a href="/login">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>


