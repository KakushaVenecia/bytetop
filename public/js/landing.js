const container = document.getElementById('productContainer');
const products = document.querySelectorAll('.product');
const productWidth = products[0].offsetWidth + 20; // Considering margin-right: 20px
const numProducts = products.length;
const scrollDuration = 3000; // Adjust scroll duration as needed

let currentIndex = 0;
let reverse = false;

products.forEach((product, index) => {
  const prevButton = product.querySelector('.arrow.left');
  const nextButton = product.querySelector('.arrow.right');

  prevButton.addEventListener('click', () => scrollProduct(index - 1));
  nextButton.addEventListener('click', () => scrollProduct(index + 1));
});

function scrollProduct(index) {
  currentIndex = (index + numProducts) % numProducts; // Wrap around to the beginning or end

  container.scrollTo({
    left: productWidth * currentIndex,
    behavior: 'smooth'
  });
}

function autoScroll() {
  setInterval(() => {
    if (!reverse) {
      currentIndex++;
      if (currentIndex >= numProducts) {
        reverse = true;
      }
    } else {
      currentIndex--;
      if (currentIndex <= 0) {
        reverse = false;
      }
    }

    container.scrollTo({
      left: productWidth * currentIndex,
      behavior: 'smooth'
    });
  }, scrollDuration);
}

autoScroll(); // Start auto-scrolling