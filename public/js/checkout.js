document.addEventListener("DOMContentLoaded", function() {
    var card1Option = document.getElementById("card1");
    var card2Option = document.getElementById("card2");
    var newCardOption = document.getElementById("newCard");
    var newCardForm = document.querySelector(".new-card-form");
    var cardNumberInput = newCardForm.querySelector("#card-number");
    var expiryDateInput = newCardForm.querySelector("#expiry-date");
    var cvvInput = newCardForm.querySelector("#cvv");
    var cardHolderInput = newCardForm.querySelector("#card-holder");
    var popup = document.getElementById("new-card-popup");

    card1Option.addEventListener("click", function() {
        newCardForm.style.display = "none";
        card1Option.classList.remove("disabled");
        card2Option.classList.remove("disabled");
        // Logic to display card 1 details
    });

    card2Option.addEventListener("click", function() {
        newCardForm.style.display = "none";
        card1Option.classList.remove("disabled");
        card2Option.classList.remove("disabled");
        // Logic to display card 2 details
    });

    newCardOption.addEventListener("click", function() {
        popup.style.display = "flex";
        card1Option.classList.add("disabled");
        card2Option.classList.add("disabled");

        // Clear the input fields for the new card form
        cardNumberInput.value = "";
        expiryDateInput.value = "";
        cvvInput.value = "";
        cardHolderInput.value = "";
    });

    // Close the popup when the user clicks on the "Close" button
    document.getElementById("close-popup").addEventListener("click", function() {
        popup.style.display = "none";
        card1Option.classList.remove("disabled");
        card2Option.classList.remove("disabled");
    });
});



