<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="componentes.css">
    <title>Document</title>
</head>
<body>

<!-- COMPONENTE carousel_principal -->
<section class="container-carousel-principal">
        <article class="carousel_principal">
            <h2>Proyectos</h2>

            <div class="carousel_principal-izquierda">
                <img src="recursos/arena_gamer.png" alt="Fotografía de computadoras en Arena Gamer">
            </div>
            <div class="carousel_principal-derecha">
                <div class="carousel_text-container">
                <h3>Arena Gamer - Tecnópolis</h3>
                <p>El parque temático abrió las puertas de su primera arena gamer totalmente gratuita y abierta al público y sus comunidades.</p>
                </div>
                <a class="boton-primario" href="proyectos/arena-gamer.php">
                    <p>Ver más</p>
                    <div class="icon-arrow-right"></div>
                </a>
            </div>
</article>
        <div class="botones-carousel">
            <button id="anterior-proyecto"><img src="recursos/chevron-left.svg" alt="Anterior Proyecto"></button>
            <button id="siguiente-proyecto"><img src="recursos/chevron-right.svg" alt="Siguiente Proyecto"></button>
        </div>
</section>

<!-- COMPONENTE main_carousel-celeste -->

<div class="competencias_y_calendario">
    <h3>Competencias</h3>
    <!-- Este container que sigue contiene la imagen del carousel en el css -->
        
        <div class="main_competencias-container">

        
            <div class="competencias_carousel">

                    <div class="botones-carousel">
                        <button id="anterior-competencia"><img src="recursos/chevron-left.svg" alt="Anterior Competencia"></button>

                        <button id="siguiente-competencia"><img src="recursos/chevron-right.svg" alt="Siguiente Competencia"></button>
                    </div>
                    <div class="container-celeste">
                            <h4>
                                Juegos Bonaerenses
                            </h4>
                            <p>Desde 2017 hemos logrado incorporar a los Deportes Electrónicos como disciplina deportiva dentro de los Juegos Bonaerenses, una competencia donde participan más de 340 mil jovenes de toda la Provincia de Bs As.</p>
                        <a href="juegos-bonaerenses.php" class="boton-primario">
                            <p>Ver más</p>
                            <div class="icon-arrow-right"></div>
                        </a>
                    </div>
            </div>        
        </div>


        </div>


        </div>


    </div>





<!-- COMPONENTE calendar -->
    
        <div class="main_calendar-container">
            <h3>Calendario</h3>
            <div class="botones-carousel botones-calendario" >
                    <button id="anterior-mes"><img src="recursos/chevron-left.svg" alt="Anterior Competencia"></button>
                    <p>Octubre</p>
                    <button id="siguiente-mes"><img src="recursos/chevron-right.svg" alt="Siguiente Competencia"></button>
                </div>
            <div class="calendar-main">
                
                <img src="recursos/coscu.png" alt="Imagen del streamer Coscu jugando en un evento mientras streamea">
            <div>
                <div>
                    <div class="calendar-main text-calendar">
                        <h3>Streaming con Coscu</h3>
                        <h4>Jueves 5</h4>
                    </div>
                    <p>De 17hs a 18hs vía Twitch</p>
                    <p>Preparate para aprender los movimientos que llevaron a Coscu a consagrarse como ganador en la tercera jornada de Argentina Game Show Flow 2021.</p>
                </div>

                    <a href="streaming-coscu.php" class="boton-primario">
                        <p>Ver más</p>
                        <div class="icon-arrow-right"></div>
                    </a>
                </div>


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
                    <p>28 Mar.</p>
                </div>
                <div>
                    <h5>Nuevas tecnicas de ataque en LOL con Sabrina Carnevale</h5>
                    <p>De 18hs a 19hs vía Twitch</p>
                </div>

            </div>
            <div class="arrow-down"></div>
        </div>

<!-- COMPONENTE main_secciones -->


    <div class="main_secciones">
            <a href="investigaciones.php"><div class="main_secciones-card">
            <h5>Investigaciones</h5>
            </div></a>
            <a href="streamers.php"><div class="main_secciones-card">
                <h5>Streamers</h5>
            </div>
                </a>
                <a href="prensa.php"><div class="main_secciones-card">
                    <h5>Prensa</h5>
                </div>
                </a>
        </div>

        


    </div>

<!-- COMPONENTE main_card-magenta-info -->


<div class="main_card-magenta-wrapper">
            
    <div class="main_card-magenta-info">
        <h3>Contactate con DEVA</h3>
        <p>Si estás interesado en saber un poco más de nosotros, o tenés una consulta, estaremos más que comprometidos en responderte lo antes posible.</p>

        <a href="certificaciones.html" class="boton-primario">
            <p>+Info</p>
            <div class="icon-arrow-right"></div>
        </a>

    </div>

</div>

    <!-- inicio componente main_seccion-grilla-->

        <section class="main_seccion-grilla">           
            <article class="heading-grilla">
                <h2>proyectos en curso</h2> 
                <div id="filtro">
                    <p>filtrar</p>
                    <img src="recursos/chevron-down.svg" alt="chevron filtro">
                </div>
            </article>
            <article class="container_grilla">
                <div class="container">
                    <img src="recursos/proyectos-arena-gamer.png" alt="arena gamer - tecnópolis">
                    <div>
                        <h3>arena gamer - tecnópolis</h3>
                        <p>El parque temático abrio puertas a su primer arena gamer totalmente gratuita y abierta al público y sus comunidades.</p>
                    </div>
                    <a href="proyectos/arena_gamer.html">
                        <p>ver más</p>
                    </a>
                </div>
                <div class="container">
                    <img src="recursos/proyectos-deporte-olimpico.png" alt="reconocer los esports como deporte olimpico">
                    <div>
                        <h3>reconocer los esports como deporte olímpico</h3>
                        <p>Impulsar la creación de una ley que regule los esports y las personas que trabajan dentro del ámbito digital de manera profesional.</p>
                    </div>
                    <a href="proyectos/esports_olimpicos.html" class="boton_mas">
                        <p>ver más</p>
                    </a>
                </div>
                <div class="container">
                    <img src="recursos/proyectos-torneo-femenino.png" alt="torneo femenino para ligas mayores">
                    <div>
                        <h3>torneo femenino para ligas mayores</h3>
                        <p>En noviembre se llevó a cabo el evento femenino más importante del año, con el objetivo de fomentar la participación de las mujeres en los esports.</p>
                    </div>                    
                    <a href="proyectos/torneo_femenino_mayores.html" class="boton_mas">
                        <p>ver más</p>
                    </a>
                </div>
                <div class="container">
                    <img src="recursos/proyectos-adicciones.png" alt="videojuegos, adicciones y su relación">
                    <div>
                        <h3>videojuegos, adicciones y su relación</h3>
                        <p>Charla preventiva sobre la adicción a la pantalla desde temprana edad y posibles mecanismos de acción para la prevención de esta problemática.</p>
                    </div>                    
                    <a href="proyectos/videojuegos_adicciones.html" class="boton_mas">
                        <p>ver más</p>
                    </a>
                </div>
            </article>    
            <div class="arrow-down"></div>
     </section>

    <!-- Fin main_seccion-grilla-->

 


</body>
</html>