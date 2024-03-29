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









var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope) {
            $scope.f4 = "";
            $scope.s4 = "";
            $scope.t4 = "";
            $scope.l4 = "";
            $scope.hname = "";
            $scope.edm = "";
            $scope.edy = "";
            $scope.cvv = "";
        });

$('.twin input').on('focus', function(){
  $(this).parent().addClass('focusit');
}).blur(function(){
  $(this).parent().removeClass('focusit');
});


$('.four-num input[ng-model="f4"]').on('keyup change', function(){
if($(this).val().slice(0,1) === "4"){
  $('.logo b').attr('class','visa');
  $('.clayout').addClass('blueit');
}else{
    $('.logo b').attr('class','master');
  $('.clayout').removeClass('blueit');
  };
});
$('.four-num input').on('keyup change', function(){
  $in = $(this);
    if ($in.val().length > 3) {
      $in.next().focus();
    };  
 });
$('input[ng-model="cvv"]').on('focus', function(){
  $('#payment .card').addClass('flip');
}).on('blur', function(){
  $('#payment .card').removeClass('flip');
});
  $('.twin input').on('keyup change', function(){
  $in = $(this);
  if($in.next().length){
    if ($in.val().length > 1) {
      $in.next().focus();
    };
  }
  else{
    if ($in.val().length > 1) {
      $in.blur();
    }
  }
 });
  
 $("input[name='expiry-data']").mask("00 / 00");


 document.getElementById('verifyButton').addEventListener('click', function() {
    // Navigate to the verifynumber page
    window.location.href = 'http://127.0.0.1:8000/verifynumber'; // Change to the correct URL
});



// Get references to the month and year select elements
var monthSelect = document.getElementById("expiry_month");
var yearSelect = document.getElementById("expiry_year");

// Function to get the expiry date
function getExpiryDate() {
    // Get the selected month and year values
    var month = monthSelect.value;
    var year = yearSelect.value;

    // Format the expiry date as MM/YYYY
    var expiryDate = month + '/' + year;

    return expiryDate;
}

// Example usage
var expiryDate = getExpiryDate();
console.log('Expiry Date:', expiryDate);