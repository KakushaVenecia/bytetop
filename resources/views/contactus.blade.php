 <!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <link rel="stylesheet" href="css/contactus.css"> 
</head>


<body>
  @include('partials.navbar')
<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>CONTACT</span>
            <span>US</span>
          </div>
          <div class="app-contact">CONTACT INFO : mairajkhan78@gmail.com</div>
        </div>
        <div class="screen-body-item">
          <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div>
                <input type="text" name="name"  placeholder="NAME" value="">
            </div>
            <div >
                <input type="email" name="email" placeholder="EMAIL">
            </div>
            <div >
                <input type="text" name="contact_no" placeholder="CONTACT NO">
            </div>
            <div >
                <input type="text" name="message" placeholder="MESSAGE">
            </div>
            <div class="app-form-group buttons">
                <button type="button" class="app-form-button">CANCEL</button>
                <button type="submit" class="app-form-button">SEND</button>
            </div>
        </form>
        </div>
      </div>
    </div>
</div>
</div>
@include('partials.footer')
</body>
</html> 