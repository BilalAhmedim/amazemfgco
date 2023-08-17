const toggleBtn = document.querySelector('.hb');
const nav = document.querySelector('.nav-nav');

toggleBtn.addEventListener('click', () => {
  nav.classList.toggle('open');
});
