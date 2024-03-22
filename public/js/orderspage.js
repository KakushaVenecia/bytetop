$(document).ready(function () {
    $(".card").click(function () {
      $(this).toggleClass("toggle");
    });
  });
  


  document.getElementById('track-order-btn').addEventListener('click', function() {
   
    window.open('http://127.0.0.1:8000/trackorder', '_blank');
});