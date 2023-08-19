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


// navigation sub menu 
const parentItems = document.querySelectorAll('.has-submenu');

parentItems.forEach(item => {
  const sub_menu = item.nextElementSibling;
  item.addEventListener('click', (e) => {
    e.preventDefault();
    closeAllSubmenus();
    sub_menu.classList.toggle('open');
  });
});

function closeAllSubmenus() {
  const openSubmenus = document.querySelectorAll('.sub-menu.open');
  openSubmenus.forEach(submenu => {
    submenu.classList.remove('open');
  });
}