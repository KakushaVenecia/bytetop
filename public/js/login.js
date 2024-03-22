

document.addEventListener('DOMContentLoaded', function () {
  
  const loginText = document.getElementById('loginText');

  
  loginText.textContent = '';

 
  setTimeout(function () {
    loginText.textContent = 'Login';
  }, 500);
});