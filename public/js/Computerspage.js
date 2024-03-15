function updatePriceLabel(value) {
    const priceLabel = document.getElementById('priceLabel');
    priceLabel.textContent = `£0 to £${value}`;
}