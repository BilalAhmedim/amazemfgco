const toggleBtn = document.querySelector('.hb');
const nav = document.querySelector('.side-drawer');

toggleBtn.addEventListener('click', () => {
  nav.classList.toggle('open');
});
