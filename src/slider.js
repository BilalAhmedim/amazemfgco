const carouselContainer = document.querySelector('.carousel-container');
const carouselSlides = document.querySelectorAll('.carousel-slide');

let currentIndex = 0;
const slideInterval = 3000; // Adjust this to control the slide interval (in milliseconds)

function nextSlide() {
  currentIndex = (currentIndex + 1) % carouselSlides.length;
  updateCarousel();
}

function updateCarousel() {
  const translateValue = -currentIndex * 100;
  carouselContainer.style.transform = `translateX(${translateValue}%)`;
}

// Start automatic sliding
let slideTimer = setInterval(nextSlide, slideInterval);

// Pause sliding on hover
carouselContainer.addEventListener('mouseenter', () => {
  clearInterval(slideTimer);
});

// Resume sliding on mouse leave
carouselContainer.addEventListener('mouseleave', () => {
  slideTimer = setInterval(nextSlide, slideInterval);
});