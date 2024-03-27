<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/4d0aa3dbc2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/login.css">
        <title>Speak To Us</title>
    </head>
    
    <body>
      
        <div class="container"> 
          
            <div class="logo">
            <a href="/" ><img src="/images/Bytetoplogo1.png" alt="Logo"></a> 
            </div>
        <div>
        <h1 >Speak to Us_</h1>
      </div>
        
        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
           <div>
            <label for="name">Name:</label><br>
            <input type="text" id="name"  name="name" required placeholder="Enter your Name">
            <br>
            <label for="name">Email:</label><br>
            <input type="email" name="email" required placeholder="Enter your Name">
            <br>
            <label for="name">Contact Number:</label><br>
            <input type="text" name="contact_no" placeholder="Contact Number">
            <br>
            <label for="message">Message Us:</label><br>
            <textarea id="message" name="message" rows="4" style="width: 100%;" placeholder="Talk to Us"></textarea>
            @if (session()->has('error'))
            <div style="color: red;">{{ session('error') }}</div>
            @endif
           </div>
           <button type="submit">Send Us a Message </button>
        </form>
        </div>
    </body>
    <script src="js/login.js"></script>
    </html>
    
</html>