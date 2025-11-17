window.addEventListener("DOMContentLoaded", () => {
  const contenedor = document.querySelector(".carousel");
  carousel(contenedor);
});

const path = "/assets/images/panaderia-";

let imagenes = [];

for (let i = 0; i < 10; i++) {
  imagenes[i] = path + (i + 1) + ".webp";
}

let textosAlt = [
    "Bandeja de croissants recién horneados sacados del horno.",
    "Pan de masa dorada con un centro relleno de ingredientes frescos",
    "Baguettes doradas y crujientes en exhibición.",
    "Taza de café con latte art servida en barra de cafetería",
    "Rebanadas de pastel con frutos rojos y crema en plato de postre.",
    "Pan dulce trenzado, con forma de nudo, espolvoreado con azúcar.",
    "Pan dulce redondo y esponjoso cubierto con streusel y un toque de mermelada",
    "Panecillos dulces decorados con glaseado blanco.",
    "Pan dulce en forma de espiral sobre plato de madera.",
    "Concha de vainilla mexicana servida sobre un plato de madera",
  ],
  cont = 0,
  img;

function carousel(contenedor) {
  const atras = contenedor.querySelector(".atras");
  const adelante = contenedor.querySelector(".adelante");
  img = contenedor.querySelector(".carousel__contenido--img");

  // Mostrar la primera imagen
  img.setAttribute("alt", textosAlt[cont]);
  img.setAttribute("src", imagenes[cont]);

  // Click botones
  contenedor.addEventListener("click", (e) => {
    let tgt = e.target.closest(".carousel__btn");
    if (!tgt) return; // Evitar error si no clickean botón

    if (tgt.classList.contains("atras")) {
      mostrarImagenAnterior();
    } else if (tgt.classList.contains("adelante")) {
      mostrarImagenSiguiente();
    }
  });

  // Teclado (solo en escritorio)
  document.addEventListener("keydown", (e) => {
    if (e.key === "ArrowLeft") {
      mostrarImagenAnterior();
    } else if (e.key === "ArrowRight") {
      mostrarImagenSiguiente();
    }
  });

  // Swipe en móvil
  let startX = 0;

  contenedor.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
  });

  contenedor.addEventListener("touchend", (e) => {
    const endX = e.changedTouches[0].clientX;
    if (startX - endX > 50) {
      mostrarImagenSiguiente();
    } else if (endX - startX > 50) {
      mostrarImagenAnterior();
    }
  });
}

// Funciones para cambiar imagen
function mostrarImagenAnterior() {
  if (cont > 0) {
    cont--;
  } else {
    cont = imagenes.length - 1;
  }
  img.setAttribute("alt", textosAlt[cont]);
  img.setAttribute("src", imagenes[cont]);
}

function mostrarImagenSiguiente() {
  if (cont < imagenes.length - 1) {
    cont++;
  } else {
    cont = 0;
  }
  img.setAttribute("alt", textosAlt[cont]);
  img.setAttribute("src", imagenes[cont]);
}
