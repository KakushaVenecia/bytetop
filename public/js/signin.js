const registrationForm = document.getElementById('registerForm');

registrationForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission


       // Retrieve form values
       const name = document.getElementById('name').value;
       const email = document.getElementById('email').value;
       const password = document.getElementById('password').value;
       const passwordConfirmation = document.getElementById('passwordConfirmation').value;
   
       // Log the retrieved values to the console for debugging
       console.log('Name:', name);
       console.log('Email:', email);
       console.log('Password:', password);
       console.log('Password Confirmation:', passwordConfirmation);
       
    const formData = new FormData(registrationForm);
    const jsonData = {};

    formData.forEach((value, key) => {
        jsonData[key] = value;
    });

    fetch('/register', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(jsonData),
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        // Check if registration was successful
        if (data.success) {
            // Registration successful, redirect to verifyemail page
            window.location.href = '/verifyemail';
        } else {
            // Registration failed, handle error messages
            if (data.errors) {
                Object.keys(data.errors).forEach(fieldName => {
                    const errorMessage = data.errors[fieldName];
                    // Display error message next to the corresponding field
                    const field = registrationForm.querySelector(`[name="${fieldName}"]`);
                    if (field) {
                        const errorElement = document.createElement('span');
                        errorElement.classList.add('error-message');
                        errorElement.textContent = errorMessage;
                        field.insertAdjacentElement('afterend', errorElement);
                    }
                });
            } else {
                console.error('Registration failed:', data.message);
                // Optionally, display a generic error message to the user
            }
        }
    })
    .catch(error => {
        console.error('There was a problem with the registration:', error.message);
        // Optionally, display a generic error message to the user
    });
});
