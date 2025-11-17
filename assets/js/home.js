//Menú dinámico
window.addEventListener("scroll", checkHeader);
document.addEventListener("DOMContentLoaded", checkHeader);

function checkHeader() {
  const header = document.getElementById("header");
  const heroBtn = document.querySelector(".hero__btn");

  if (!heroBtn || !header) return;

  const dinHeader = heroBtn.getBoundingClientRect();
  const breakPoint = dinHeader.height;

  if (dinHeader.top < breakPoint) {
    header.classList.add("headerActivo");
  } else {
    header.classList.remove("headerActivo");
    closeMenu();
  }
}
// Carousel
const carousel = document.querySelector(".carousel__contenido");

// Esperamos a que todas las imágenes se carguen
const waitForImages = () => {
  const images = carousel.querySelectorAll("img");
  let loaded = 0;

  return new Promise((resolve) => {
    if (images.length === 0) resolve();

    const imageLoaded = () => {
      loaded++;
      if (loaded === images.length) resolve();
    };

    images.forEach((img) => {
      if (img.complete) {
        imageLoaded();
      } else {
        img.addEventListener("load", imageLoaded);
        img.addEventListener("error", imageLoaded); // En caso de error también continuamos
      }
    });
  });
};

const initCarousel = async () => {
  await waitForImages();

  const items = [...carousel.children];

  // Clonamos los elementos para lograr un efecto de desplazamiento infinito
  items.forEach((item) => {
    const clone = item.cloneNode(true);
    carousel.appendChild(clone);
  });

  let scrollLimit = carousel.scrollWidth / 2;
  let intervalo = null;
  let step = 1;

  const start = () => {
    if (intervalo) clearInterval(intervalo);

    intervalo = setInterval(() => {
      carousel.scrollLeft += step;

      // Si el desplazamiento llega al límite, reiniciamos de manera fluida
      if (carousel.scrollLeft >= scrollLimit) {
        carousel.scrollLeft = 0;
      }
    }, 15);
  };

  // Reiniciamos el scroll al inicio
  carousel.scrollLeft = 0;
  start();
};

initCarousel();
