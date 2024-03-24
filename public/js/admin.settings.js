function openTab(evt, tabName) {
    // Prevent the default behavior of the tab click event
    evt.preventDefault();

    // Get all elements with class="tabcontent" and hide them
    var tabcontents = document.getElementsByClassName("tabcontent");
    for (var i = 0; i < tabcontents.length; i++) {
        tabcontents[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    var tablinks = document.getElementsByClassName("tablinks");
    for (var i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.classList.add("active");
}

// Initially display the first tab
document.getElementById("profile").style.display = "block";
document.getElementsByClassName("tablinks")[0].classList.add("active");
