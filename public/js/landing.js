
function autoScroll() {
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slide');
    const slideWidth = slides[0].offsetWidth;
    
    let counter = 0;
    
    
    setInterval(() => {
      counter++;
      if (counter === slides.length) {
        counter = 0; 
      }
      
      const scrollAmount = -slideWidth * counter;
      slider.style.transform = `translateX(${scrollAmount}px)`;
    }, 4000);
  }
  
  autoScroll();