// --- Menú móvil ---
const menuBtn = document.getElementById("menu-btn");
const navMenu = document.querySelector(".navbar__menu");
const overlay = document.getElementById("overlay");
const header = document.getElementById("header");

// Abrir/cerrar menú
menuBtn.addEventListener("click", () => {
  menuBtn.setAttribute("aria-label", "Cerrar menú");
  const isActive = menuBtn.classList.toggle("active");
  navMenu.classList.toggle("active");
  overlay.classList.toggle("active");
  header.classList.toggle("menu-active", isActive);
  menuBtn.setAttribute("aria-expanded", isActive);
});

// Cerrar al hacer clic en un enlace
const navLinks = document.querySelectorAll(".nav-link");
navLinks.forEach((link) => {
  link.addEventListener("click", closeMenu);
});

// Cerrar al hacer clic en el overlay
overlay.addEventListener("click", closeMenu);

// Cerrar si se redimensiona la ventana a escritorio
window.addEventListener("resize", () => {
  if (window.innerWidth > 991) closeMenu();
});

function closeMenu() {
  menuBtn.classList.remove("active");
  navMenu.classList.remove("active");
  overlay.classList.remove("active");
  menuBtn.setAttribute("aria-expanded", "false");
  header.classList.remove("menu-active");
  menuBtn.setAttribute("aria-label", "Abrir menú");
}
