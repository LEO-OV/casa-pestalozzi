<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Eventos Casa Pestalozzi: servicio de catering personalizado con menús mediterráneos para eventos sociales y corporativos. Calidad, presentación y sabor en cada ocasión especial." />
    <meta name="author" content="Casa Pestalozzi" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords"
        content="eventos, catering, Casa Pestalozzi, cocina mediterránea, eventos sociales, banquetes, servicio corporativo" />

    <title>Casa Pestalozzi | Eventos</title>

    <link rel="icon" href="/assets/images/logo.ico" type="image/x-icon" />

    <!-- Preload imágenes -->
    <link rel="preload" as="image" href="/assets/images/catering-sm.webp" type="image/webp"
        media="(max-width: 768px)" />
    <link rel="preload" as="image" href="/assets/images/catering.webp" type="image/webp" media="(min-width: 769px)" />

    <!-- Fuentes -->
    <link rel="preload" href="/assets/fonts/KudosKapsOneNF.otf" as="font" type="font/otf" crossorigin="anonymous" />
    <link rel="preload" href="/assets/fonts/Montserrat-Regular.ttf" as="font" type="font/ttf" crossorigin="anonymous" />

    <!-- Estilos -->
    <link rel="stylesheet" href="/assets/css/reset.css?v=2" />
    <link rel="stylesheet" href="/assets/css/styles.css?v=2" />
    <link rel="stylesheet" href="/assets/css/eventos.css?v=2" />
</head>


<body>
    <?php include '../includes/header.php' ?>

    <main>
        <!-- HERO -->
        <section class="hero">
            <div class="hero__bg"></div>
            <div class="hero__contenido fade-in contenedor">
                <div>
                    <h1 class="logo">CASA PESTALOZZI</h1>
                    <h2>Eventos</h2>
                </div>
                <p>Catering para eventos que marcan la diferencia.</p>
            </div>
        </section>

        <!-- About -->
        <section class="about contenedor">
            <div class="about__texto">
                <h3 class="title-decoration about__titulo">Nuestros Eventos</h3>
                <p class="about__texto__destacado">
                    Sabor y distinción en cada detalle.
                </p>
                <p>
                    Creamos experiencias gastronómicas únicas, donde la elegancia, el
                    sabor y la atención al detalle se combinan para llevar cada
                    celebración a su máxima expresión.
                </p>
                <p>
                    Cada evento es una ocasión única, y nuestro compromiso es ofrecer un
                    servicio de catering a la altura: refinado, impecable y con propuestas
                    culinarias memorables.
                </p>
            </div>
            <div class="about__img">
                <div class="about__img--img">
                    <video controls controlsList="nodownload" preload="none"
                        aria-label="Video ejemeplificativo de los servicios de Catering ofrecidos por Casa Pestalozzi"
                        poster="/assets/images/preview.webp">
                        <source src="/assets/images/catering-vid.webm" type="video/webm" />
                        <source src="/assets/images/catering-vid.mp4" type="video/mp4" />
                        Tu navegador no soporta video.
                    </video>
                </div>
                <div class="about__img--img">
                    <div>
                        <img src="/assets/images/catering-1.webp" loading="lazy"
                            alt="Platos de comida, pasta gratinada con salsa de carne y queso derretido, y verduras." />
                    </div>
                </div>
                <div class="about__img--img">
                    <div>
                        <img src="/assets/images/catering-2.webp" loading="lazy"
                            alt="Mesa de buffet con una fuente de frutas frescas (uvas, moras, manzanas) y un plato grande de bocadillos, listos para servir." />
                    </div>
                </div>
            </div>
        </section>

        <!-- Servicios -->
        <section class="servicios contenedor">
            <div class="servicios__titulo title-decoration2">
                <h3>Servicios</h3>
            </div>
            <div class="servicios__contenido">
                <article class="elemento">
                    <div class="elemento__texto">
                        <h4>Menús de autor | 3 tiempos o más</h4>
                        <p>Alta cocina diseñada por chefs expertos, ideal para cenas de
                            gala, bodas o celebraciones privadas.</p>
                    </div>
                    <div class="elemento__img">
                        <img src="/assets/images/servicios-1.webp" loading="lazy"
                            alt="Salsa cremosa siendo vertida sobre un plato de carne a la parrilla servido en un plato blanco." />
                    </div>
                </article>
                <article class="elemento">
                    <div class="elemento__texto">
                        <h4>Desayunos y Coffee Breaks ejecutivos</h4>
                        <p>Sofisticación matutina para reuniones empresariales, congresos o
                            talleres de alto nivel.</p>
                    </div>
                    <div class="elemento__img">
                        <img src="/assets/images/servicios-2.webp" loading="lazy"
                            alt="Mesa de desayuno con un tazón grande de frutas picadas y una variedad de donas y pasteles." />
                    </div>
                </article>
                <article class="elemento">
                    <div class="elemento__texto">
                        <h4>Catering corporativo personalizado</h4>
                        <p>Soluciones gourmet adaptadas a la imagen y propósito de tu
                            marca.</p>
                    </div>
                    <div class="elemento__img">
                        <img src="/assets/images/servicios-3.webp" loading="lazy"
                            alt="Mesa de buffet festivo en un evento nocturno con varias fuentes de comida, incluyendo tartas y aperitivos, decorada con un ambiente cálido." />
                    </div>
                </article>
                <article class="elemento">
                    <div class="elemento__texto">
                        <h4>Taquizas & Parrilladas premium</h4>
                        <p>Tradición con un toque moderno y exclusivo, ideal para todo tipo
                            de eventos sociales.</p>
                    </div>
                    <div class="elemento__img">
                        <img src="/assets/images/servicios-4.webp" loading="lazy"
                            alt="Bufetera calentada por una flama para evento de catering." />
                    </div>
                </article>
            </div>
        </section>

        <!-- Razones - cotizar -->
        <section class="elegir">
            <div class="elegir__razones">
                <div class="razones">
                    <div class="razones__titulo">
                        <h3>Porqué elegirnos</h3>
                    </div>
                    <dl class="razones__texto">
                        <dt>Gastronomía con identidad</dt>
                        <dd>Fusión entre técnica, ingredientes frescos y creatividad.</dd>
                        <dt>Presentación impecable</dt>
                        <dd>
                            Cada platillo es una obra visual que refleja buen gusto y
                            profesionalismo.
                        </dd>
                        <dt>Puntualidad y ejecución sin fallas</dt>
                        <dd>Coordinación precisa y atención integral.</dd>
                        <dt>Atención personalizada</dt>
                        <dd>
                            Diseñamos el menú perfecto para reflejar la esencia de tu
                            evento.
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="elegir__cotiza">
                <div class="cotiza">
                    <p class="cotiza__experiencia">
                        Convierte tu evento en una experiencia memorable
                    </p>
                    <div class="cotiza__enlace">
                        <a class="btn" href="https://wa.me/525614818297" target="_blank">
                            Cotiza tu evento
                        </a>
                    </div>
                    <p class="cotiza__contacto">
                        Contáctanos y nuestro equipo te enviará una propuesta
                        personalizada en menos de 24 horas.
                    </p>
                </div>
            </div>
        </section>

        <!-- Testimonios -->
        <section class="testimonios contenedor">
            <div class="testimonios__titulo title-decoration2">
                <h3>Testimonios</h3>
            </div>
            <div class="testimonios__contenido">
                <div class="testimonios__textos">
                    <blockquote>
                        <p class="opinion">“Un servicio impecable. No solo fue delicioso, sino que cada platillo
                            sorprendió
                            a nuestros invitados.”</p>
                        <cite class="nombre">– María E., Boda.</cite>
                    </blockquote>
                    <blockquote>
                        <p class="opinion">“Elegancia, sabor y profesionalismo. Superaron nuestras expectativas en cada
                            detalle.”</p>
                        <cite class="nombre">– Javier L., Evento empresarial.</cite>
                    </blockquote>
                </div>
                <div class="testimonios__imagen">
                    <img src="/assets/images/testimonios.webp" loading="lazy"
                        alt="Equipo de Casa Pestalozzi listo para un evento de catering." />
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