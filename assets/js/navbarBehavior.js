window.addEventListener("scroll", headerBehavior);
window.addEventListener("DOMContentLoaded", headerBehavior);
let lastScrollY = window.scrollY;

function headerBehavior() {
  const currentScrollY = window.scrollY;
  //Si scrollea hacia arriba muestra el Header
  if (currentScrollY < lastScrollY || currentScrollY == 0) {
    header.classList.add("headerActivo");
  } else {
    header.classList.remove("headerActivo");
  }
  lastScrollY = currentScrollY;
}
