<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Asociación abocada a la profesionalización de los Deportes Electrónicos tanto desde un marco deportivo, como educativo y social o de entretenimiento.">
    <meta name="keywords" content="DEVA, esports, EJUAR, deportes electrónicos, videojuegos profesional, esports argentina">
    <title>DEVA - Haciendo crecer los e-sports en Argentina</title>
    <link rel="stylesheet" href="main2.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="footer.css">
    <script src="nav.js" defer></script>
</head>
<body>
    <header>

    <div class="video-deva">
    <video autoplay muted plays-inline loop id="video-home-deva" alt="Video Institucional DEVA">
    <source src="recursos/home-video-deva.mp4" type="video/mp4">
    </video>
    </div>
    <?php include("nav.php");?>

    </header>
    <main>
        
    <div class="container-black">
        <div class="container-black_right">
            <H1>DEVA es el gran motor que promociona y desarrolla los deportes electrónicos en el país.</H1>
            <a href="about.html" class="boton-mas-info">
                <p>+Info</p>
                <div class="arrow-right"></div>
            </a>
        </div>
        <div class="container-black_left">
            <h2>DEVA</h2>
            <p>Somos DEVA, una asociación civil nacida el 7 de Mayo de 2017 y estamos abocados a promocionar y trabajar en pos de la profesionalización de los Deportes Electrónicos tanto desde un marco deportivo, como educativo y social o de entretenimiento.  Está conformado por un grupo de jóvenes profesionales que comparten una gran pasión por el deporte y amor por los videojuegos.</p>
        </div>    
        
            
    </div>
    <div class="main_card-proyectos">
        <div class="container_carousel">
            <h2>PROYECTOS</h2>
            <section class="carousel">
                
                <article class="main_carousel-scroll">
                    <img src="recursos/arena_gamer.png" alt="Fotografía de computadoras en Arena Gamer">
                    <div class="carousel_text-container">
                        <h3>Arena Gamer - Tecnópolis</h3>
                        <P>El parque temático abrió las puertas de su primera arena gamer totalmente gratuita y abierta al público y sus comunidades.</P>
                        <div>
                            <a class="boton-mas-info" href="proyectos/arena-gamer.php">
                            <p>Ver más</p>
                            <div class="icon-arrow-right"></div>
                            </a>
                        </div>
                    </div>
                </article>
                <!-- COMENTAMOS ESTO PORQUE NO SABEMOS HACER EL JAVASCRIPT PARA EL CAROUSEL, ASI QUE QUEDA FIJO 
                    <article class="main_carousel-scroll">
                        <article class="main_carousel-scroll">
                    <img src="recursos/ags.png" alt="Fotografía de computadoras en Arena Gamer">
                    <div class="carousel_text-container">
                        <h3>AGS 2022</h3>
                        <P>Durante el fin de semana que se dará lugar el AGS FLOW 2022 tendremos competencias de alto nivel, entre ellas, estarán nuestros seleccionados de CSGO, E-Football y Mobile Legends.</P>
                        <div>
                            <a class="boton-mas-info" href="proyectos/arena-gamer.html">
                            <p>Ver más</p>
                            <div class="icon-arrow-right"></div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="main_carousel-scroll">
                        <article class="main_carousel-scroll">
                    <img src="recursos/bonaerenses.png" alt="Fotografía de equipo de Gaming en los Juegos Bonaerenses">
                    <div class="carousel_text-container">
                        <h3>Juegos Bonaerenses</h3>
                        <P>Desde 2017 hemos logrado incorporar a los Deportes Electrónicos como disciplina deportiva dentro de los Juegos Bonaerenses, una competencia donde participan más de 340 mil jóvenes de toda la Provincia de Bs As.</P>
                        <div>
                            <a class="boton-mas-info" href="proyectos/juegos-bonaerenses.php">
                            <p>Ver más</p>
                            <div class="icon-arrow-right"></div>
                            </a>
                        </div>
                    </div>
                </article>

                <article class="main_carousel-scroll">
                        <article class="main_carousel-scroll">
                    <img src="recursos/ejuar.png" alt="Fotografía de computadoras en los Juegos Universitarios Argentinos">
                    <div class="carousel_text-container">
                        <h3>EJUAR</h3>
                        <P>Los Juegos Universitarios Argentinos son la competencia oficial del Ministerio de Educación en conjunto con la Federación del Deporte Universitario Argentino con más de 160 universidades participantes.</P>
                        <div>
                            <a class="boton-mas-info" href="proyectos/EJUAR.php">
                            <p>Ver más</p>
                            <div class="icon-arrow-right"></div>
                            </a>
                        </div>
                    </div>
                </article>
                -->
            </section>
        </div>
    </div>
    <div class="botones-carousel">
        <button id="anterior-proyecto"><img src="recursos/chevron-left.svg" alt="Anterior Proyecto"></button>
        <button id="siguiente-proyecto"><img src="recursos/chevron-right.svg" alt="Siguiente Proyecto"></button>
    </div>
    <!-- Hasta acá el carousel de proyectos-->

    <div class="main_card-magenta">
        <h3>Certificaciones</h3>
            <p>Enterate de todo lo que necesitás saber para obtener la certificación DEVA y los requisitos para inscribirte.</p>
            <a href="certificaciones.html" class="boton-mas-info">
                <p>+Info</p>
                <div class="icon-arrow-right"></div>
            </a>
    </div>

    <div class="competencias_y_calendario">
    <h3>Competencias</h3>
    <!-- Este container que sigue contiene la imagen del carousel en el css -->
        
        <div class="main_competencias-container">

        
            <div class="competencias_juegos-bsas">
            <div>
                <div class="botones-carousel">
                    <button id="anterior-competencia"><img src="recursos/chevron-left.svg" alt="Anterior Competencia"></button>

                    <button id="siguiente-competencia"><img src="recursos/chevron-right.svg" alt="Siguiente Competencia"></button>
                </div>
                <div class="container-celeste">
                        <h4>
                            Juegos Bonaerenses
                        </h4>
                        <p>Desde 2017 hemos logrado incorporar a los Deportes Electrónicos como disciplina deportiva dentro de los Juegos Bonaerenses, una competencia donde participan más de 340 mil jovenes de toda la Provincia de Bs As.</p>
                    <a href="juegos-bonaerenses.php" class="boton-mas-info">
                        <p>Ver más</p>
                        <div class="icon-arrow-right"></div>
                    </a>
                </div>
        </div>


        </div>


        </div>


        <div class="main_calendar-container">
            <h3>Calendario</h3>
            <div class="botones-carousel" class="botones-calendario">
                    <button id="anterior-competencia"><img src="recursos/chevron-left.svg" alt="Anterior Competencia"></button>
                    <p>Octubre</p>
                    <button id="siguiente-competencia"><img src="recursos/chevron-right.svg" alt="Siguiente Competencia"></button>
                </div>
            <div class="calendar-main">
                
                <img src="recursos/coscu.png" alt="Imagen del streamer Coscu jugando en un evento mientras streamea">
                <div>
                    <div class="calendar-main text-calendar">
                        <h3>Streaming con Coscu</h3>
                        <h4>Jueves 5</h4>
                    </div>
                    <p>De 17hs a 18hs vía Twitch</p>
                    <p>Preparate para aprender los movimientos que llevaron a Coscu a consagrarse como ganador en la tercera jornada de Argentina Game Show Flow 2021.</p>
                </div>

                <a href="streaming-coscu.php" class="boton-mas-info">
                        <p>Ver más</p>
                        <div class="icon-arrow-right"></div>
                    </a>


            </div>
            <div class="calendar_secondary">

                <div class="event-date">
                    <p>15 Sab.</p>
                </div>
                <div>
                    <h5>Demostración de nuevos equipamientos</h5>
                    <p>De 12 a 18hs en Arena Gamer - Tecnópolis</p>
                </div>

            </div>

            <div class="calendar_secondary">

                <div class="event-date">
                    <p>15 Sab.</p>
                </div>
                <div>
                    <h5>Nuevas tecnicas de ataque en LOL con Sabrina Carnevale</h5>
                    <p>De 18hs a 19hs vía Twitch</p>
                </div>

            </div>
        </div>

            <div class="arrow-down"></div>

        <section class="main_galeria">
            <article>
                <h2>
                    Galería
                </h2>
                <a href="galeria.php">Ver más</a>
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <div class="botones-carousel" class="botones-galeria">
                    <button id="anterior-competencia"><img src="recursos/chevron-left.svg" alt="Anterior Competencia"></button>
                    <button id="siguiente-competencia"><img src="recursos/chevron-right.svg" alt="Siguiente Competencia"></button>
                </div>
            </article>
        </section>


    </div>

    
    


    <div class="main_secciones">
        <div class="main_secciones-card">
            <h5>Investigaciones</h5>
        </div>
        <div class="main_secciones-card">
            <h5>Streamers</h5>
        </div>
        <div class="main_secciones-card">
            <h5>Prensa</h5>
        </div>
    </div>

               

    <div class="main_card-magenta">
        <h3>Contactate con DEVA</h3>
            <p>Si estás interesado en saber un poco más de nosotros, o tenés una consulta, estaremos más que comprometidos en responderte lo antes posible.</p>
            <a href="contacto.html" class="boton-mas-info">
                <p>+INFO</p>
                <div class="icon-arrow-right"></div>
            </a>
    </div>

    </main>

    <?php include('footer.php');?>

    <script src="index.js"></script>

</body>

</html>
