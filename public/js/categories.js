document.addEventListener('DOMContentLoaded', function() {
    const brandCheckboxes = document.querySelectorAll('.brand-checkbox');
    const products = document.querySelectorAll('.product');
    const priceRange = document.getElementById('priceRange');

    brandCheckboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            filterProducts();
        });
    });

    priceRange.addEventListener('input', function() {
        const maxPrice = parseFloat(this.value);
        updatePriceLabel(maxPrice);
        filterProductsByPrice(maxPrice);
    });

    function filterProducts() {
        const selectedBrands = Array.from(brandCheckboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.getAttribute('data-brand'));

        products.forEach(function(product) {
            const productBrand = product.getAttribute('data-brand');
            if (selectedBrands.length === 0 || selectedBrands.includes(productBrand)) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    }

  
});

document.addEventListener('DOMContentLoaded', function() {
    const products = document.querySelectorAll('.product');
    const priceRange = document.getElementById('priceRange');

    priceRange.addEventListener('input', function() {
        const maxPrice = parseFloat(this.value);
        updatePriceLabel(maxPrice);
        filterProductsByPrice(maxPrice);
    });

    function filterProductsByPrice(maxPrice) {
        products.forEach(function(product) {
            const productPriceElement = product.querySelector('.product-price');
            if (productPriceElement) {
                const productPrice = parseFloat(productPriceElement.innerText.replace('Price: $', ''));
                if (productPrice <= maxPrice) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            }
        });
    }

    function updatePriceLabel(maxPrice) {
        const priceLabel = document.getElementById('priceLabel');
        if (priceLabel) {
            priceLabel.textContent = '£0 to £' + maxPrice;
        }
    }
});
document.addEventListener('DOMContentLoaded', function() {
    const tagCheckboxes = document.querySelectorAll('.tag-checkbox');
    const products = document.querySelectorAll('.product');

    tagCheckboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            filterProducts();
        });
    });

    function filterProducts() {
        const selectedTags = Array.from(tagCheckboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.getAttribute('data-tag'));

        products.forEach(function(product) {
            const productTags = product.getAttribute('data-tags').split(',');
            if (selectedTags.length === 0 || selectedTags.some(tag => productTags.includes(tag))) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    }
});
