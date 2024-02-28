document.addEventListener('DOMContentLoaded', function() {
    const productNameSelect = document.getElementById('product-name');
    const productDescriptionTextarea = document.getElementById('product-description');
    const customNameSection = document.getElementById('custom-name-section');
    const customDescriptionSection = document.getElementById('custom-description-section');
    const customNameInput = document.getElementById('custom-name');
    const customDescriptionInput = document.getElementById('custom-description');

    // Event listener for the product name select element
    productNameSelect.addEventListener('change', function() {
        const selectedProductName = this.value;

        if (selectedProductName === '__custom__') {
            // If custom product is selected, show custom name and description input fields
            productDescriptionTextarea.style.display = 'none';
            customNameSection.style.display = 'block';
            customDescriptionSection.style.display = 'block';
        } else {
            // If regular product is selected, show product description textarea and hide custom fields
            productDescriptionTextarea.style.display = 'block';
            customNameSection.style.display = 'none';
            customDescriptionSection.style.display = 'none';

            // Fetch product description based on the selected product
            fetch(`/get-product-description?name=${selectedProductName}`)
                .then(response => response.json())
                .then(data => {
                    // Update the textarea with the retrieved description
                    productDescriptionTextarea.value = data.description;
                })
                .catch(error => {
                    console.error('Error fetching product description:', error);
                });
        }
    });

    // Event listener for the form submission
    document.getElementById('productForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Get form data
        const formData = new FormData(this);

        // If custom product, set custom name and description as the values for 'name' and 'description' fields
        if (productNameSelect.value === '__custom__') {
            formData.set('name', customNameInput.value);
            formData.set('description', customDescriptionInput.value);
        }

        // Send form data to the server
        fetch('/admin/products', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Handle success, such as displaying a success message
                alert('Product created successfully');
                // Redirect the user if needed
                window.location.href = '/admin/dashboard';
            } else {
                // Handle failure, such as displaying an error message
                alert('Failed to create product');
            }
        })
        .catch(error => {
            // Handle network errors or other exceptions
            console.error('Error:', error);
            alert('An error occurred while processing your request');
        });
    });
});
