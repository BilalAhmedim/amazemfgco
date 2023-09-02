// zoomer

const track = document.querySelector('.carousel__track'),
  slides = Array.from(track.children),
  nextButton = document.querySelector('.carousel__button--right'),
  prevButton = document.querySelector('.carousel__button--left'),
  dotNav = document.querySelector('.carousel__nav'),
  dots = Array.from(dotNav.children),
  slideWidth = slides[0].getBoundingClientRect().width;

const setSlidePosition = (slide, index) => {
  slide.style.left = slideWidth * index + 'px';
}
slides.forEach(setSlidePosition);

const moveToSlide = (track, currentSlide, targerSlide) => {
  track.style.transform = 'translateX(-' + targerSlide.style.left + ')';
  currentSlide.classList.remove('current-slide');
  targerSlide.classList.add('current-slide');
}

const updateDots = (currentDot, targerDot) => {
  currentDot.classList.remove('current-slide');
  targerDot.classList.add('current-slide');
}

const right = e => {
  const currentSlide = track.querySelector('.current-slide');
  const nextSlide = currentSlide.nextElementSibling;
  const currentDot = dotNav.querySelector('.current-slide');
  const nextDot = currentDot.nextElementSibling;
  const firstDot = dotNav.firstElementChild;
  if (nextSlide === null) {
    moveToSlide(track, currentSlide, slides[0]);
    updateDots(currentDot, firstDot);
  } else {
    moveToSlide(track, currentSlide, nextSlide);
    updateDots(currentDot, nextDot);
  }
}


const left = e => {
  const currentSlide = track.querySelector('.current-slide');
  const prevSlide = currentSlide.previousElementSibling;
  const currentDot = dotNav.querySelector('.current-slide');
  const prevDot = currentDot.previousElementSibling;
  const lastDot = dotNav.lastElementChild;
  if (prevSlide === null) {
    moveToSlide(track, currentSlide, slides[slides.length - 1]);
    updateDots(currentDot, lastDot);
  } else {
    moveToSlide(track, currentSlide, prevSlide);
    updateDots(currentDot, prevDot);
  }
}

const dotSlide = e => {
  const targetDot = e.target.closest('img');
  if (!targetDot) return
  const currentSlide = track.querySelector('.current-slide');
  const currentDot = dotNav.querySelector('.current-slide');
  const targetIndex = dots.findIndex(dot => dot === targetDot);
  const targetslide = slides[targetIndex];
  moveToSlide(track, currentSlide, targetslide);
  updateDots(currentDot, targetDot);
}

prevButton.addEventListener('click', left);

nextButton.addEventListener('click', right);

dotNav.addEventListener('click', dotSlide);



// Products Slider Zoomer

const image = document.querySelector('.carousel__images'),
  imageContainer = document.querySelectorAll('.carousel__images');

const srcSet = e => {
  const src = e.getAttribute("data-image-src");
  e.style.backgroundImage = `url(${src})`;
}
imageContainer.forEach(srcSet);

const productZoomer = e => {
  let width = image.offsetWidth;
  let height = image.offsetHeight;
  let mousex = e.offsetX;
  let mousey = e.offsetY;

  let bgPosX = (mousex / width * 100);
  let bgPosY = (mousey / height * 100);
  e.target.style.backgroundPosition = `${bgPosX}%  ${bgPosY}%`;
}

imageContainer.forEach(e => {
  e.addEventListener('mousemove', productZoomer);
  e.addEventListener('mouseleave', event => {
    e.style.backgroundPosition = 'center';
  })
})
