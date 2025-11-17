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
// Carousel optimizado
const carousel = document.querySelector(".carousel__contenido");

// Inicializar cuando la página termina el layout inicial
document.addEventListener("DOMContentLoaded", () => {
  initCarousel();
});

function initCarousel() {
  if (!carousel) return;

  const items = [...carousel.children];

  // Clonar los elementos solo 1 vez para el desplazamiento infinito
  const fragment = document.createDocumentFragment();
  items.forEach((item) => fragment.appendChild(item.cloneNode(true)));
  carousel.appendChild(fragment);

  const totalWidth = carousel.scrollWidth / 2; // mitad = tamaño del carrusel original
  let scrollPos = 0;
  const step = 0.5; // más suave y menos brusco en móviles

  // Animación optimizada con rAF
  function animate() {
    scrollPos += step;

    if (scrollPos >= totalWidth) {
      scrollPos = 0;
    }

    carousel.scrollLeft = scrollPos;

    requestAnimationFrame(animate);
  }

  requestAnimationFrame(animate);
}

// Mapa
const mapa = document.getElementById("mapa");

const loadMap = () => {
  mapa.innerHTML = `
    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.8064060515617!2d-99.1617558!3d19.3775335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff8b91dea5e9%3A0x30b571a160d3835a!2sCasa%20Pestalozzi%20Del%20Valle!5e0!3m2!1ses-419!2smx!4v1741916233407!5m2!1ses-419!2smx"
                    width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Mapa de ubicación de Casa Pestalozzi Del Valle, Ciudad de México">
                </iframe>
    `;
};

const observer = new IntersectionObserver((entries) => {
  if (entries[0].isIntersecting) {
    loadMap();
    observer.disconnect();
  }
});

observer.observe(mapa);
