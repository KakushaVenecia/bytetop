// Example to handle form submission
const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
    event.preventDefault(); // Prevent default form submission
    // Add your login logic here, e.g., send data to a server
    console.log('Login form submitted!');
});
