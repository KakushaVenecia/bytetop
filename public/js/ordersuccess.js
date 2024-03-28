$('.order').click(function (e) {

    let button = $(this);
  
    if (!button.hasClass('animate')) {
      button.addClass('animate');
      setTimeout(() => {
        button.removeClass('animate');
      }, 10000);
    }
  
  });



  $(document).ready(function() {
    // Add click event handler to "Complete Order" button
    $('#complete-order-btn').on('click', function() {
      // Your logic for placing the order...
      
      // Redirect to orders page
      window.location.href = 'http://165.232.32.166/orderspage';
    });
  });
  

  