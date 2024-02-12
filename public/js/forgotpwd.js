function continueClicked() {
    var email = document.getElementById("email").value;
    var errorMessage = document.getElementById("error-message");

    if (email === "") {
      errorMessage.textContent = "Please enter your email.";
    } else {
      // Redirect to another page (you can replace 'otherpage.html' with the actual page)
      window.location.href = "http://127.0.0.1:8000/checkmail";
    }
  }

  document.getElementById("returntologin").addEventListener("click", function() {
    // Redirect to login page (you can replace 'login.html' with the actual page)
    window.location.href = "http://127.0.0.1:8000/login";
  });