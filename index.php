<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Casa Pestalozzi: Restaurante de cocina mediterránea con un toque contemporáneo. Descubre nuestros servicios de catering y panadería artesanal de excelencia." />
    <meta name="author" content="Casa Pestalozzi" />
    <meta name="keywords"
        content="restaurante, cocina mediterránea, panadería artesanal, catering, Casa Pestalozzi, comida gourmet" />
    <meta name="robots" content="index, follow" />

    <title>Casa Pestalozzi | Cocina mediterránea</title>
    <link rel="icon" href="/assets/images/logo.ico" type="image/x-icon" />

    <!-- Preload imágenes -->
    <link rel="preload" as="image" href="/assets/images/banner-sm.webp" type="image/webp" media="(max-width: 768px)" />
    <link rel="preload" as="image" href="/assets/images/banner.webp" type="image/webp" media="(min-width: 769px)" />

    <!-- Fuentes -->
    <link rel="preload" href="/assets/fonts/KudosKapsOneNF.otf" as="font" type="font/otf" crossorigin="anonymous" />
    <link rel="preload" href="/assets/fonts/Montserrat-Regular.ttf" as="font" type="font/ttf" crossorigin="anonymous" />

    <!-- Estilos -->
    <link rel="stylesheet" href="/assets/css/reset.css" />
    <link rel="stylesheet" href="/assets/css/styles.css" />
    <link rel="stylesheet" href="/assets/css/home.css" />
</head>

<body>
    <!-- ENCABEZADO -->
    <?php include 'includes/header.php'; ?>

    <main>
        <!-- Hero -->
        <section class="hero box-shadow">
            <div class="hero__bg"></div>
            <div class="hero__contenido fade-in">
                <div class="hero__texto">
                    <h1 class="logo">CASA PESTALOZZI</h1>
                    <p>
                        Cocina mediterránea con corazón mexicano.
                    </p>
                </div>
                <div class="hero__nav">
                    <a class="btn" href="/restaurante" title="Restaurante">Restaurante</a>
                    <a class="btn" href="/panaderia" title="Panadería">Panadería</a>
                    <a class="btn" href="/eventos" title="Eventos">Eventos</a>
                </div>
                <div class="hero__btn">
                    <a class="hero__btn--animado" href="#nosotros">
                        <p>Conoce más sobre nosotros</p>
                        <svg class="w-[36px] h-[36px] text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Nosotros -->
        <section class="nosotros contenedor" id="nosotros">
            <article class="nosotros__texto">
                <h2 class="title-decoration">Nosotros</h2>
                <p class="nosotros__texto--destacado">
                    " En Casa Pestalozzi fusionamos la esencia de la cocina mediterránea con el alma de los sabores
                    mexicanos. "
                </p>
                <p>
                    Celebramos los ingredientes del Mediterráneo
                    con una mirada contemporánea que respeta la tradición… y abraza la innovación.
                </p>

                <p>
                    Cada plato está diseñado para evocar recuerdos o crear nuevas experiencias, invitándote a descubrir
                    sabores frescos, platos con historia y una experiencia que combina tradición, creatividad y calidez.
                </p>
            </article>
            <div class="nosotros__imagenes">
                <div class="nosotros__imagenes--img">
                    <img src="/assets/images/nosotros-1.webp" loading="lazy"
                        alt="Plato gourmet con pescado fresco y guarnición de hierbas finas." />
                </div>
                <div class="nosotros__imagenes--img">
                    <img src="/assets/images/nosotros-3.webp" loading="lazy"
                        alt="Cóctel naranja con rodaja de cítrico siendo preparado." />
                </div>
                <div class="nosotros__imagenes--img">
                    <img src="/assets/images/nosotros-2.webp" loading="lazy"
                        alt="Palto con aros de cebolla y salsa, acompañado de una bebida fresca con una rodaja de limón." />
                </div>
            </div>
        </section>

        <!-- Carousel -->
        <section class="carousel box-shadow">
            <div class="carousel__btn">
                <a class="btn" href="/menu" target="_blank" rel="noopener noreferrer">
                    Conoce nuestro menú
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778" />
                    </svg>
                </a>
            </div>
            <div class="carousel__contenido">
                <div class="carousel__elemento">
                    <div class="carousel__elemento--img">
                        <img src="/assets/images/comida-9.webp" loading="lazy"
                            alt="Carpaccio de Salmón con eneldo y crujientes" />
                    </div>
                </div>
                <div class="carousel__elemento">
                    <div class="carousel__elemento--img">
                        <img src="/assets/images/comida-1.webp" loading="lazy"
                            alt=" Trío de Tostas con combinaciones de sabores jamón y fruta, mejillones y tomate con rúcula" />
                    </div>
                </div>
                <div class="carousel__elemento">
                    <div class="carousel__elemento--img">
                        <img src="/assets/images/comida-2.webp" loading="lazy"
                            alt="Ensalada fresca con nueces, arándanos y aderezo." />
                    </div>
                </div>
                <div class="carousel__elemento">
                    <div class="carousel__elemento--img">
                        <img src="/assets/images/comida-3.webp" loading="lazy"
                            alt="Pizza Margherita estilo napolitano." />
                    </div>
                </div>
                <div class="carousel__elemento">
                    <div class="carousel__elemento--img">
                        <img src="/assets/images/comida-4.webp" loading="lazy"
                            alt="Postre con frutos rojos acompañado de café con arte latte." />
                    </div>
                </div>
                <div class="carousel__elemento">
                    <div class="carousel__elemento--img">
                        <img src="/assets/images/comida-7.webp" loading="lazy"
                            alt="Pasta con camarones en salsa cremosa." />
                    </div>
                </div>
                <div class="carousel__elemento">
                    <div class="carousel__elemento--img">
                        <img src="/assets/images/comida-10.webp" loading="lazy"
                            alt="Hamburguesa gourmet de res acompañada de papas a la francesa." />
                    </div>
                </div>
                <div class="carousel__elemento">
                    <div class="carousel__elemento--img">
                        <img src="/assets/images/comida-6.webp" loading="lazy"
                            alt="Jamón serrano con tomates cherry y queso rallado en plato." />
                    </div>
                </div>
                <div class="carousel__elemento">
                    <div class="carousel__elemento--img">
                        <img src="/assets/images/comida-5.webp" loading="lazy"
                            alt="Hamburguesas gourmet de res con queso." />
                    </div>
                </div>
                <div class="carousel__elemento">
                    <div class="carousel__elemento--img">
                        <img src="/assets/images/comida-8.webp" loading="lazy"
                            alt="Bocadillo de jamón serrano con queso acompañado con ensalada." />
                    </div>
                </div>

            </div>
        </section>

        <!-- Maridaje -->
        <section class="maridaje contenedor" id="maridaje">
            <h2 class="maridaje__title">Casa Maridaje</h2>
            <p class="maridaje__intro">
                Descubre las combinaciones ideales entre nuestros platillos y vinos cuidadosamente seleccionados,
                resaltando los sabores y texturas de cada preparación.
            </p>

            <div class="maridaje__content">
                <article class="maridaje__item">
                    <div class="maridaje__item--imagen">
                        <img src="/assets/images/maridaje-1.webp" loading="lazy"
                            alt="Copa de vino blanco y botella junto a una mini pizza dulce con frutos rojos." />
                    </div>
                    <div class=" maridaje__item--texto">
                        <h3>Frescura del mediterráneo</h3>
                        <p>Los vinos blancos afrutados y cítricos son el acompañante ideal...
                        </p>
                    </div>
                </article>

                <article class="maridaje__item">
                    <div class="maridaje__item--imagen">
                        <img src="/assets/images/maridaje-3.webp" loading="lazy"
                            alt="Primer plano de un grueso bistec sazonado cocinándose sobre una parrilla." />
                    </div>
                    <div class="maridaje__item--texto">
                        <h3>Intensidad y equilibrio</h3>
                        <p>Para cortes y carnes asadas... que realzan la profundidad de nuestros sabores.</p>
                    </div>
                </article>

                <article class="maridaje__item ">
                    <div class="maridaje__item--imagen">
                        <img src="/assets/images/maridaje-2.webp" loading="lazy"
                            alt="Copa de vino tinto y botella Don Pepe junto a una mini pizza salada con jamón y queso." />
                    </div>
                    <div class="maridaje__item--texto">
                        <h3>Dulce final</h3>
                        <p>Cierra tu experiencia con un vino rosado o espumoso que complemente nuestros postres, dulzura
                            y
                            frescura en cada sorbo.
                        </p>
                    </div>
                </article>
            </div>
        </section>

        <!-- Contacto -->
        <section class="contacto contenedor" id="contacto">
            <div class="informacion__contacto">
                <h2 class="title-decoration">Contacto</h2>

                <address class="informacion__contacto--direccion">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                        </svg>
                        José Enrique Pestalozzi 1250, Ciudad de México, México
                    </p>

                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                        </svg>
                        <a href="tel:+5614818297">56 1481 8297</a>
                    </p>

                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                        </svg>
                        <a href="mailto:rcasapestalozzi1250@hotmail.com">rcasapestalozzi1250@hotmail.com</a>
                    </p>
                </address>

                <div class="informacion__contacto--redes">
                    <a href="#" aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>

                    <a href="#" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

                <div class="informacion__contacto--reservas">
                    <a class="btn" href="https://wa.me/525614818297" target="_blank">Reserva
                        aquí</a>
                </div>
            </div>

            <div class="mapa__contacto box-shadow">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.8064060515617!2d-99.1617558!3d19.3775335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff8b91dea5e9%3A0x30b571a160d3835a!2sCasa%20Pestalozzi%20Del%20Valle!5e0!3m2!1ses-419!2smx!4v1741916233407!5m2!1ses-419!2smx"
                    width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Mapa de ubicación de Casa Pestalozzi Del Valle, Ciudad de México">
                </iframe>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <?php include 'includes/footer.php' ?>


    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
    <script src="/assets/js/navbar.js"></script>
    <script src="/assets/js/home.js"></script>
</body>

</html>