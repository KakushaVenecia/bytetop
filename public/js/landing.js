// Auto-scroll function
function autoScroll() {
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slide');
    const slideWidth = slides[0].offsetWidth;
    
    let counter = 0;
    
    // Scroll interval
    setInterval(() => {
      counter++;
      if (counter === slides.length) {
        counter = 0; // Reset counter if it reaches the end
      }
      // Calculate the position to scroll to
      const scrollAmount = -slideWidth * counter;
      slider.style.transform = `translateX(${scrollAmount}px)`;
    }, 3000); // Adjust the interval time (milliseconds)
  }
  
  autoScroll();