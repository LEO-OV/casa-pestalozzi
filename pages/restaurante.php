<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Restaurante Casa Pestalozzi: cocina mediterránea con un toque mexicano, sabores auténticos y presentaciones modernas. Vive una experiencia gastronómica única en un ambiente cálido y elegante.">
    <meta name="author" content="Casa Pestalozzi">
    <meta name="robots" content="index, follow">
    <meta name="keywords"
        content="restaurante, cocina mediterránea, comida mexicana, Casa Pestalozzi, gastronomía, catering, panadería artesanal">

    <title>Casa Pestalozzi | Restaurante</title>

    <link rel="icon" href="/assets/images/logo.ico" type="image/x-icon">

    <!-- Preload imágenes -->
    <link rel="preload" as="image" href="/assets/images/restaurante-sm.webp" type="image/webp"
        media="(max-width: 768px)">
    <link rel="preload" as="image" href="/assets/images/restaurante.webp" type="image/webp" media="(min-width: 769px)">

    <!-- Fuentes -->
    <link rel="preload" href="/assets/fonts/KudosKapsOneNF.otf" as="font" type="font/otf" crossorigin="anonymous">
    <link rel="preload" href="/assets/fonts/Montserrat-Regular.ttf" as="font" type="font/ttf" crossorigin="anonymous">

    <!-- Estilos -->
    <link rel="stylesheet" href="/assets/css/reset.css?v=2">
    <link rel="stylesheet" href="/assets/css/styles.css?v=2">
    <link rel="stylesheet" href="/assets/css/restaurante.css?v=2">
</head>


<body>
    <!-- ENCABEZADO -->
    <?php include '../includes/header.php' ?>

    <main>
        <section class="hero">
            <div class="hero__bg"></div>
            <div class="hero__contenido fade-in contenedor">
                <div>
                    <h1 class="logo">CASA PESTALOZZI</h1>
                    <h2>Restaurante</h2>
                </div>
                <p>Descubre sabores frescos, platos con historia y una experiencia que combina tradición y creatividad.
                </p>
            </div>
        </section>

        <!-- Menu -->
        <section class="menu contenedor">
            <div class="menu__contenido">
                <h3 class="titulo"><span class="titulo--normal">Conoce</span><span class="titulo--destacado">Nuestro
                        Menú</span></h3>
                <p class="menu__contenido--estilo">
                    Explora sabores que cuentan historias.
                </p>
                <p>
                    Nuestro menú es una carta de amor al mediterráneo y a la cocina mexicana, con opciones para todos
                    los gustos.
                </p>
                <p>
                    Vive la experiencia Casa Pestalozzi en un espacio íntimo, con atención al detalle y servicio
                    personalizado.
                </p>
                <div class="menu__enlaces">
                    <a class="btn" href="/menu" target="_blank" rel="noopener noreferrer">Ver menú</a>
                </div>
            </div>
            <div class="menu__img">
                <div class="menu__img--contenedor">
                    <img src="/assets/images/restaurante-menu.png"
                        alt="Plato de pasta fetuccine con trozos de pechuga de pollo a la plancha y queso rallado."
                        loading="lazy">
                </div>
            </div>
        </section>

        <!-- Reserva -->
        <section class="reservacion" id="reservacion">
            <div class="contenedor reservacion__contenido">
                <div class="reservacion__texto">
                    <h3 class="titulo">
                        <span class="titulo--normal">Planea tu visita</span>
                        <span class="titulo--destacado">Reserva tu mesa</span>
                    </h3>
                    <p class="reservacion__info">
                        Disfruta de una experiencia gastronómica inolvidable en Casa Pestalozzi.
                        Reserva fácilmente tu mesa y déjate sorprender por nuestros sabores.
                    </p>

                    <div class="reservacion__btn">
                        <a href="https://wa.me/525614818297?text=Hola!%20Quisiera%20hacer%20una%20reservación%20en%20Casa%20Pestalozzi"
                            target="_blank" rel="noopener noreferrer" class="btn">
                            Reservar mesa
                        </a>
                    </div>
                </div>

                <div class="reservacion__horario">
                    <h4>Horario</h4>
                    <table>
                        <tr>
                            <td>Lunes</td>
                            <td>8:30 a.m. – 03:00 p.m.</td>
                        </tr>
                        <tr>
                            <td>Martes</td>
                            <td>8:30 a.m. – 10:00 p.m.</td>
                        </tr>
                        <tr>
                            <td>Miércoles</td>
                            <td>8:30 a.m. – 10:00 p.m.</td>
                        </tr>
                        <tr>
                            <td>Jueves</td>
                            <td>8:30 a.m. – 10:00 p.m.</td>
                        </tr>
                        <tr>
                            <td>Viernes</td>
                            <td>8:30 a.m. – 10:00 p.m.</td>
                        </tr>
                        <tr>
                            <td>Sábado</td>
                            <td>8:30 a.m. – 10:00 p.m.</td>
                        </tr>
                        <tr>
                            <td>Domingo</td>
                            <td>8:30 a.m. – 07:00 p.m.</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>

        <!-- Lo mejor de la casa -->
        <section class="destacados contenedor">
            <div class="destacados__titulo title-decoration2">
                <h3>Lo Mejor de la Casa</h3>
            </div>
            <div class="destacados__texto">
                <p>
                    Nuestros especiales cambian con las estaciones, como el Mediterráneo.
                    Desde pastas artesanales hasta mariscos de temporada, nuestros especiales son el alma cambiante del
                    menú. Pregunta por lo nuevo, lo fresco, lo único.
                </p>
            </div>
            <div class="destacados__contenido">
                <div class="destacados__elemento">
                    <img src="/assets/images/mejor-1.webp" loading="lazy"
                        alt="Sartén metálica con aceitunas verdes en aceite de oliva." />
                </div>
                <div class="destacados__elemento">
                    <img src="/assets/images/mejor-2.webp" loading="lazy"
                        alt="Pasta fettuccine con camarones a la parrilla." />
                </div>
                <div class="destacados__elemento">
                    <img src="/assets/images/mejor-5.webp" loading="lazy"
                        alt="Plato de camarones y papas en una salsa con hierbas, servido en un tazón de hierro fundido con rebanadas de pan tostado." />
                </div>
                <div class="destacados__elemento">
                    <img src="/assets/images/mejor-4.webp" loading="lazy"
                        alt="Cóctel Espresso Martini, servido en una copa con una capa cremosa y adornado con tres granos de café." />
                </div>
                <div class="destacados__elemento">
                    <img src="/assets/images/mejor-3.webp" loading="lazy"
                        alt="Una tosta con jamón serrano y una tosta con pimiento asado y hojas verdes, servidas en un plato de madera." />
                </div>
                <div class="destacados__elemento">
                    <img src="/assets/images/mejor-6.webp" loading="lazy"
                        alt="Plato con filete de res a la parrilla, papas gajo y pimientos asados con romero." />
                </div>
            </div>
        </section>

        <!-- Pizza -->
        <section class="pizzas box-shadow">
            <div class="pizzas__contenido">
                <div class="pizzas__contenedor">
                    <h3 class="titulo"><span class="titulo--normal">Prueba</span><span
                            class="titulo--destacado">Nuestras
                            Pizzas</span></h3>
                    <div class="pizzas__texto">
                        <p>Pizzas al estilo Casa Pestalozzi, la mejor del corazón de la Del Valle.</p>
                        <p>Masa casera semi-integral, salsa de pomodoro fresco, ingredientes seleccionados y ese
                            inconfundible sabor que solo se consigue en un horno de piedra. Cada bocado es un viaje
                            directo
                            a Nápoles, con un toque especial de alma mexicana.</p>
                        <p class="pizzas__texto--destacado">¡Cada bocado te lleva a vivir una experiencia auténtica de
                            gastronomía!</p>
                    </div>
                </div>

                <div class="pizzas__media">
                    <div class="pizzas__media--columna">
                        <div class="pizzas__item">
                            <img src="/assets/images/pizza-1.webp"
                                alt="Pizza artesanal dorándose dentro de un horno de leña encendido, mostrando su corteza crujiente y queso fundido."
                                loading="lazy" />
                        </div>
                    </div>

                    <div class="pizzas__media--columna">
                        <div class="pizzas__item">
                            <img src="/assets/images/pizza-2.webp"
                                alt="Chef agregando queso a una pizza artesanal justo antes de introducirla en un horno de leña tradicional"
                                loading="lazy" />
                        </div>
                        <div class="pizzas__item">
                            <img src="/assets/images/pizza-3.webp"
                                alt="Mesa servida con varias pizzas artesanales recién horneadas, acompañadas de vino blanco y un ambiente acogedor."
                                loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include '../includes/footer.php' ?>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
    <script src="/assets/js/navbar.js" defer></script>
    <script src="/assets/js/navbarBehavior.js" defer></script>
</body>

</html>