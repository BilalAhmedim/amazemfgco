const toggleBtn = document.querySelector('.hb');
const nav = document.querySelector('.nav-nav');
const model = document.querySelector('.model');

toggleBtn.addEventListener('click', () => {
  nav.classList.toggle('open');
  model.classList.toggle('open');
});

// Model
model.addEventListener("click", () => {
  nav.classList.toggle('open');
  model.classList.toggle('open');

  // when we click on model its simulate click on toggle svg
  const rectElement = document.querySelector('.hb rect');
  if (rectElement) {
    const animateElement = rectElement.querySelector('animate');

    if (animateElement) {
      animateElement.beginElement();
    }
  }
});


// navigation sub menu 
const parentItems = document.querySelectorAll('.has-submenu');

parentItems.forEach(item => {
  const sub_menu = item.nextElementSibling;
  item.addEventListener('click', (e) => {
    e.preventDefault();
    const isOpen = sub_menu.classList.contains('open');
    closeAllSubmenus();
    if (!isOpen) {
      sub_menu.classList.add('open'); // Open if it was closed
    }

  });
});

function closeAllSubmenus() {
  const openSubmenus = document.querySelectorAll('.sub-menu.open');
  openSubmenus.forEach(submenu => {
    submenu.classList.remove('open');
  });
}