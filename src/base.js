const toggleBtn = document.querySelector('.hb');
const nav = document.querySelector('.nav-nav');
const model = document.querySelector('.model');

toggleBtn.addEventListener('click', () => {
  nav.classList.toggle('open');
  model.classList.toggle('open');
});


model.addEventListener("click", () => {
  nav.classList.toggle('open');
  model.classList.toggle('open');
});