<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Panadería artesanal de Casa Pestalozzi: panes dulces elaborados con recetas tradicionales e ingredientes seleccionados. Sabor casero y calidad premium.">
    <meta name="author" content="Casa Pestalozzi">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="panadería artesanal, Casa Pestalozzi, panes dulces, repostería, pan casero, postres">

    <title>Casa Pestalozzi | Panadería</title>

    <link rel="icon" href="/assets/images/logo.ico" type="image/x-icon">

    <!-- Preload imágenes -->
    <link rel="preload" as="image" href="/assets/images/panaderia-sm.webp" type="image/webp" media="(max-width: 768px)">
    <link rel="preload" as="image" href="/assets/images/panaderia.webp" type="image/webp" media="(min-width: 769px)">

    <!-- Fuentes -->
    <link rel="preload" href="/assets/fonts/KudosKapsOneNF.otf" as="font" type="font/otf" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/Montserrat-Regular.ttf" as="font" type="font/ttf" crossorigin="anonymous">

    <!-- Estilos -->
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/panaderia.css">
</head>


<body>
    <?php include '../includes/header.php' ?>

    <main>
        <section class="hero box-shadow">
            <div class="hero__bg"></div>
            <div class="hero__contenido fade-in contenedor">
                <div>
                    <h1 class="logo">CASA PESTALOZZI</h1>
                    <h2>Panadería</h2>
                </div>
                <p>Un lugar donde el aroma del pan recién horneado despierta memorias, crea momentos y celebra lo
                    cotidiano con sabor.</p>
            </div>
        </section>

        <!-- About -->
        <section class="about contenedor">
            <div class="about__contenido">
                <h3>Nuestra esencia</h3>
                <p class="about__destacado">Tradición que se hornea cada mañana.</p>
                <p>Aquí el tiempo no corre; fermenta, reposa y se hornea con paciencia. Somos una panadería donde lo
                    artesanal es más que una técnica es una forma de honrar el pasado y regalar calidez al presente.
                </p>
                <p class="about__destacado">Una experiencia que se siente y se comparte.</p>
                <p>
                    Cada detalle ha sido pensado para que vivas un momento especial. Desde el primer paso al cruzar la
                    puerta hasta el último bocado. No hay prisa, solo el gozo de disfrutar lo que está bien hecho.
                </p>
            </div>
            <div class="about__carousel">
                <div class="carousel">
                    <div class="atras carousel__btn" role="button" tabindex="0" aria-label="Imagen anterior">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m15 19-7-7 7-7" />
                        </svg>
                    </div>

                    <div class="adelante carousel__btn" role="button" tabindex="0" aria-label="Imagen siguiente">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m9 5 7 7-7 7" />
                        </svg>
                    </div>

                    <div class="carousel__contenido" aria-live="polite">
                        <img class="carousel__contenido--img" src="" loading="lazy" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- Visita -->
        <section class="pan box-shadow">
            <div class="pan__visita">
                <div class="visita">
                    <h3>Ven a visitarnos</h3>
                    <p>"En el corazón de la Del Valle, un rincón donde el pan tiene historia, el ambiente
                        invita a
                        quedarse, y el sabor lo dice todo."</p>
                    <div class="visita__enlace">
                        <a class="btn" href="https://maps.app.goo.gl/NwDmN5Tjbz3Etf7r7" target="_blank">
                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Cómo llegar
                        </a>
                    </div>
                </div>
            </div>
            <div class="pan__horario">
                <div class="horario">
                    <h4>Horario</h4>
                    <table>
                        <tr>
                            <td>Lunes</td>
                            <td>7:30 a.m. – 03:00 p.m.</td>
                        </tr>
                        <tr>
                            <td>Martes</td>
                            <td>7:30 a.m. – 06:00 p.m.</td>
                        </tr>
                        <tr>
                            <td>Miércoles</td>
                            <td>7:30 a.m. – 06:00 p.m.</td>
                        </tr>
                        <tr>
                            <td>Jueves</td>
                            <td>7:30 a.m. – 06:00 p.m.</td>
                        </tr>
                        <tr>
                            <td>Viernes</td>
                            <td>7:30 a.m. – 06:00 p.m.</td>
                        </tr>
                        <tr>
                            <td>Sábado</td>
                            <td>7:30 a.m. – 06:00 p.m.</td>
                        </tr>
                        <tr>
                            <td>Domingo</td>
                            <td>7:30 a.m. – 03:00 p.m.</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>

        <!-- Galería -->
        <section class="galeria contenedor">
            <h3 class="galeria__titulo">Del horno a tu mesa</h3>
            <p class="galeria__intro">
                Panes dulces, tradicionales y de temporada, hechos con dedicación y amor.
                Una experiencia visual y aromática que conquista desde la primera mirada.
            </p>

            <div class="galeria__grid">
                <div class="item horizontal">
                    <img src="/assets/images/galeria-1.webp" alt="">
                </div>
                <div class="item vertical">
                    <img src="/assets/images/galeria-2.webp" alt="">
                </div>
                <div class="item cuadrado">
                    <img src="/assets/images/galeria-3.webp" alt="">
                </div>
                <div class="item cuadrado">
                    <img src="/assets/images/galeria-4.webp" alt="">
                </div>
                <div class="item vertical">
                    <img src="/assets/images/galeria-5.webp" alt="">
                </div>
                <div class="item horizontal">
                    <img src="/assets/images/galeria-6.webp" alt="">
                </div>
                <div class="item horizontal">
                    <img src="/assets/images/galeria-7.webp" alt="">
                </div>
            </div>
        </section>
    </main>


    <!-- FOOTER -->
    <?php include '../includes/footer.php' ?>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
    <script src="/assets/js/navbar.js"></script>
    <script src="/assets/js/navbarBehavior.js"></script>
    <script src="/assets/js/panaderia.js"></script>
</body>

</html>