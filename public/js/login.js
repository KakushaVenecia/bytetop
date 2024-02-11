document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    fetch('/login', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Invalid credentials');
        }
        return response.json();
    })
    .then(data => {
        // Store the token in localStorage or sessionStorage
        localStorage.setItem('token', data.token);

        // Redirect or navigate to another page
        window.location.href = '/dashboard'; // Example redirect URL
    })
    .catch(error => {
        console.error('Error:', error);
    });
});