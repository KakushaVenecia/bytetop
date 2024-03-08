function showMenu() {
    document.getElementById("profileMenu").style.display = "block";
}

function hideMenu() {
    document.getElementById("profileMenu").style.display = "none";
}

function toggleMenu() {
    var menu = document.getElementById("profileMenu");
    menu.style.display = (menu.style.display === "none" || menu.style.display === "") ? "block" : "none";
}

function openPopup(popupId) {
    // Hide all popups
    hideAllPopups();

    // Show the specified popup
    var popup = document.getElementById(popupId);
    if (popup) {
        popup.style.display = "block";
    }

}

function hideAllPopups() {
    // Hide all popups
    var popups = document.querySelectorAll('.popup');
    popups.forEach(function (popup) {
        popup.style.display = "none";
    });
}


function closePopup(popupId) {
    var popup = document.getElementById(popupId);
    if (popup) {
        popup.style.display = "none";
    }
}


function openAddressForm() {
    // Display the form
    document.getElementById('addressForm').style.display = 'block';
    // Add blur to the body
    document.body.classList.add('body-blur');
}

// Function to close address form
function closeAddressForm() {
    // Hide the form
    document.getElementById('addressForm').style.display = 'none';
    // Remove blur from the body
    document.body.classList.remove('body-blur');
}


function signOut() {
    // Perform any necessary sign-out actions (e.g., clearing session data, etc.)

    // Redirect to the landing page
    window.location.href = 'http://127.0.0.1:8000/';
}




function openPopup(popupId) {
    var popup = document.getElementById(popupId);
    
    if (popup) {
        document.querySelector('main').classList.add('blurbackground');

        popup.style.display = "block";
    }
}

function closePopup(popupId) {
    var popup = document.getElementById(popupId);
    if (popup) {
        document.querySelector('main').classList.remove('blurbackground');

        popup.style.display = "none";
    }
}

function openEditPopup(popupId) {
    // Close other popups
    closePopup('editNamePopup');
    closePopup('editEmailPopup');
    closePopup('editMobilePopup');
    closePopup('editPasswordPopup');
    
    // Open the requested popup
    openPopup(popupId);
}


function updateField(fieldName, newFieldValue) {
    var field = document.getElementById(fieldName);
    var newValue = document.getElementById(newFieldValue).value;
    field.value = newValue;
    closePopup('editNamePopup');
    // Adjust the closePopup call based on the specific popup you're updating
}

