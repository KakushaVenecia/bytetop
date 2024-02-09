document.getElementById('productForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get form data
    var formData = new FormData(this);

    // Send form data to your API endpoint
    fetch('/api/products', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (response.ok) {
            return response.json(); // Parse JSON response
        } else {
            throw new Error('Failed to create product');
        }
    })
    .then(data => {
        // Handle successful creation
        console.log('Product created:', data);
        alert('Product created successfully');
    })
    .catch(error => {
        // Handle creation errors
        console.error('Failed to create product:', error);
        alert('Failed to create product');
    });
});
