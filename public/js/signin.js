document.getElementById('registerForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get form data
    var formData = new FormData(this);

    // Log form data to console
    console.log('Form Data:');
    for (var pair of formData.entries()) {
        console.log(pair[0] + ': ' + pair[1]);
    }

    var password = formData.get('password');
    var confirmPassword = formData.get('password_confirmation');

    // Validate password confirmation
    if (password !== confirmPassword) {
        alert('Passwords do not match');
        return; // Stop form submission if passwords don't match
    }
    // Send form data to your API endpoint
    fetch('/api/register', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (response.ok) {
            return response.json(); // Parse JSON response for successful registration
        } else {
            throw new Error('Failed to register'); // Throw error for non-2xx response
        }
    })
    .then(data => {
        // Handle successful registration
        console.log('Registration successful:', data);
        alert('Registration successful');
    })
    .catch(error => {
        // Handle registration errors
        console.log('Registration failed:', error);
        alert('Registration failed');
    })
});
