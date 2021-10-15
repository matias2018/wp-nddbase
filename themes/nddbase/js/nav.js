
/* Mobile Menu */
const mobileMenu = document.querySelector('.navbar-desktop');
const toggleButton = document.querySelector('.burger-menu');
const theMenu = document.querySelector('.nav-items');
const theBody = document.body;
let menuOpen = false; 

toggleButton.addEventListener("click", openBurgerMenu)


function openBurgerMenu(e) {
  e.preventDefault();
  menuOpen = !menuOpen;
  if(menuOpen == true) {
    mobileMenu.style.left = "0"
    toggleButton.classList.add('opened');
    theMenu.classList.add('opened');
    theBody.classList.add('overflow-hidden');
  } else {
    mobileMenu.style.left = "-100%"
    toggleButton.classList.remove('opened');
    theMenu.classList.remove('opened');
    theBody.classList.remove('overflow-hidden');
  }
}
