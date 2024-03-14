// // Example to handle form submission
// document.getElementById('loginForm').addEventListener('submit', function(event) {
//     event.preventDefault();

//     const email = document.getElementById('email').value;
//     const password = document.getElementById('password').value;

//     fetch('http://your-api-endpoint/login', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//         },
//         body: JSON.stringify({
//             email: email,
//             password: password,
//         }),
//     })
//     .then(response => {
//         if (!response.ok) {
//             throw new Error('Invalid credentials');
//         }
//         return response.json();
//     })
//     .then(data => {
//         // Store the token in localStorage or sessionStorage
//         // Redirect the user to the dashboard or perform any other action
//         console.log(data);
//     })
//     .catch(error => {
//         console.error('Error:', error);
//     });
// });



// const showPassword = document.getElementById("show-password");
// const passwordField = document.getElementById("password");

// showPassword.addEventListener("click", function() {
//   const isPasswordVisible = passwordField.getAttribute("type") === "text";

//   this.classList.toggle("fa-eye-slash", !isPasswordVisible);
//   const type = isPasswordVisible ? "password" : "text";
//   passwordField.setAttribute("type", type);
// });




  






//   function validateLogin() {
//     var emailInput = document.getElementsByName("email")[0];
//     var passwordInput = document.getElementsByName("password")[0];
//     var rememberMeCheckbox = document.getElementById("rememberMe");
  
//     // Reset previous error messages
//     hideErrorMessages();
  
//     // Validate email and password
//     if (emailInput.value === "") {
//       displayErrorMessage("Please enter an email", emailInput);
//       return;
//     }
  
//     if (passwordInput.value === "") {
//       displayErrorMessage("Password is required", passwordInput);
//       return;
//     }
  
//     // Check if the email and password are correct (replace this with your actual validation logic)
//     var isValidUser = validateUser(emailInput.value, passwordInput.value);
  
//     if (isValidUser) {
//       // Redirect to home page or perform necessary actions for successful login
//       alert("Login successful!");
//     } else {
//       displayErrorMessage("A user with this email not found", emailInput);
//     }
//   }
  
//   function displayErrorMessage(message, inputElement) {
//     var errorDiv = document.createElement("div");
//     errorDiv.className = "error-message";
//     errorDiv.textContent = message;
//     inputElement.parentNode.appendChild(errorDiv);
//   }
  
//   function hideErrorMessages() {
//     var errorMessages = document.querySelectorAll(".error-message");
//     errorMessages.forEach(function (errorMessage) {
//       errorMessage.parentNode.removeChild(errorMessage);
//     });
//   }
  
//   function validateUser(email, password) {
//     // Replace this with your actual validation logic
//     // For simplicity, assuming a user with email "test@example.com" and password "password" is valid
//     return email === "test@example.com" && password === "password";
//   }
  




// document.getElementById("forgotPasswordLink").addEventListener("click", function() {
//     window.location.href = "http://127.0.0.1:8000/forgotpwd"; 
// });

// document.getElementById("create_account").addEventListener("click", function() {
//     window.location.href = "http://127.0.0.1:8000/signup";
// });

document.addEventListener('DOMContentLoaded', function () {
  // Target the loginText element
  const loginText = document.getElementById('loginText');

  // Set the text content to an empty string to clear the initial text
  loginText.textContent = '';

  // Set the text to "Login" after a short delay to simulate typing
  setTimeout(function () {
    loginText.textContent = 'Login';
  }, 500);
});