function performSearch() {
    // Get the input value
    var searchTerm = document.getElementById("searchInput").value;

    // Simulate a search (replace this with your actual search functionality)
    var searchResults = simulateSearch(searchTerm);

    // Display search results
    displayResults(searchResults);
}

function simulateSearch(term) {
    // This is a placeholder for actual search functionality
    // Replace this with your server-side or client-side search logic
    return [
        "Result 1: " + term,
        "Result 2: " + term,
        "Result 3: " + term
    ];
}


function footerToggle(footerBtn) {
    $(footerBtn).toggleClass("btnActive");
    $(footerBtn).next().toggleClass("active");
}

function displayResults(results) {
    // Get the element where results will be displayed
    var resultsContainer = document.getElementById("searchResults");

    // Clear previous results
    resultsContainer.innerHTML = "";

    // Display each result
    results.forEach(function(result) {
        var resultElement = document.createElement("p");
        resultElement.textContent = result;
        resultsContainer.appendChild(resultElement);
    });
}


