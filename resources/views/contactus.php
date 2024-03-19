<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="css/contactus.css">
</head>
<body>
  <h3>Contact Us</h3>

  <div class="container">
    <form action="/action_page.php">
      <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Enter Your name.." required>
      </div>

      <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Enter Your last name.." required>
      </div>

      <div class="form-group">
        <label for="Eid">Email ID</label>
        <input type="email" id="Eid" name="Emailid" placeholder="Enter Your Email ID.." required>
      </div>

      <div class="form-group">
        <label for="Cnumber">Contact Number</label>
        <input type="tel" id="Cnumber" name="Contact Number" placeholder="Enter Your Contact Number.." required>
      </div>

      <div class="form-group">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
      </div>

      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
