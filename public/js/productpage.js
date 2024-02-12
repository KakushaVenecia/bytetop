function showProducts(category) {
    // Reset product area content
    document.getElementById('productContainer').innerHTML = '';

    // Fetch and display products based on the category (placeholder data)
    if (category === 'computers') {
        // Fetch and display computer products (replace with actual data)
        for (let i = 1; i <= 3; i++) {
            document.getElementById('productContainer').innerHTML += `
                <div class="product-section">
                    <img src="https://via.placeholder.com/150" alt="Computer ${i}" class="product-image">
                    <h3>Computer Model ${i}</h3>
                    <p>Brand: Brand-${i}</p>
                    <p>Processor: Core i${i}</p>
                    <p>Date: ${getDate()}</p>
                    <!-- Add other details -->
                </div>
            `;
        }
    } else if (category === 'laptops') {
        // Fetch and display laptop products (replace with actual data)
        for (let i = 1; i <= 3; i++) {
            document.getElementById('productContainer').innerHTML += `
                <div class="product-section">
                    <img src="https://via.placeholder.com/150" alt="Laptop ${i}" class="product-image">
                    <h3>Laptop Model ${i}</h3>
                    <p>Brand: Brand-${i}</p>
                    <p>Processor: Core i${i}</p>
                    <p>Date: ${getDate()}</p>
                    <!-- Add other details -->
                </div>
            `;
        }
    }
}

function getDate() {
    const currentDate = new Date();
    return currentDate.toDateString();
}
function showProducts(category) {
    // Reset product area content
    document.getElementById('productContainer').innerHTML = '';

    // Fetch and display products based on the category (placeholder data)
    if (category === 'computers') {
        // Fetch and display computer products (replace with actual data)
        for (let i = 1; i <= 10; i++) {
            document.getElementById('productContainer').innerHTML += `
                <div class="product-section">
                    <img src="https://via.placeholder.com/150" alt="Computer ${i}" class="product-image">
                    <h3>Computer Model ${i}</h3>
                    <p>Brand: Brand-${i}</p>
                    <p>Processor: Core i${i}</p>
                    <p>Date: ${getDate()}</p>
                    <!-- Add other details -->
                </div>
            `;
        }
    } else if (category === 'laptops') {
        // Fetch and display laptop products (replace with actual data)
        for (let i = 1; i <= 11; i++) {
            document.getElementById('productContainer').innerHTML += `
                <div class="product-section">
                    <img src="https://via.placeholder.com/150" alt="Laptop ${i}" class="product-image">
                    <h3>Laptop Model ${i}</h3>
                    <p>Brand: Brand-${i}</p>
                    <p>Processor: Core i${i}</p>
                    <p>Date: ${getDate()}</p>
                    <!-- Add other details -->
                </div>
            `;
        }
    }
}


function updatePriceLabel(value) {
const priceLabel = document.getElementById('priceLabel');
priceLabel.textContent = `£0 to £${value}`;
}



function getDate() {
    const currentDate = new Date();
    return currentDate.toDateString();
}