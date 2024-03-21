
document.addEventListener('DOMContentLoaded', function() {
    const productNameSelect = document.getElementById('product-name');
    const customProductNameSection = document.getElementById('custom-product-name');
    const defaultProductDescription = document.getElementById('default-product-description');
    const customProductDescriptionSection = document.getElementById('custom-description-section');
    const productDescriptionTextarea = document.getElementById('product-description');
    const productQuantity = document.getElementById('quantity')

    productNameSelect.addEventListener('change', function() {
        const selectedValue = this.value;

        if (selectedValue === '__custom__') {
            customProductNameSection.style.display = 'block';
            customProductDescriptionSection.style.display = 'block';
            defaultProductDescription.style.display = 'none';
        } else {
            customProductNameSection.style.display = 'none';
            customProductDescriptionSection.style.display = 'none';
            defaultProductDescription.style.display = 'block';

            // Fetch product description based on the selected product
            fetch(`/get-product-description?name=${selectedValue}`)
                .then(response => response.json())
                .then(data => {
                    // Update the product description textarea with the fetched description
                    productDescriptionTextarea.value = data.description;
                })
                .catch(error => {
                    console.error('Error fetching product description:', error);
                });

        
                fetch(`/get-product-quantity?name=${selectedValue}`)
                    .then(response => response.json())
                    .then(data => {
                        // Update the product quantity input with the fetched quantity
                        productQuantity.value = data.quantity;
                    })
                    .catch(error => {
                        console.error('Error fetching product quantity:', error);
                    });
        }
    });

    // Initially hide custom fields
    customProductNameSection.style.display = 'none';
    customProductDescriptionSection.style.display = 'none';

    // Event listener for the form submission
    document.getElementById('productForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Get form data
        const formData = new FormData(this);

        // If custom product, set custom name and description as the values for 'name' and 'description' fields
        if (productNameSelect.value === '__custom__') {
            const customNameInput = document.getElementById('custom-name');
            const customDescriptionInput = document.getElementById('custom-description');
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

