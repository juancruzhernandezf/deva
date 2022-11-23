<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Asociación abocada a la profesionalización de los Deportes Electrónicos tanto desde un marco deportivo, como educativo y social o de entretenimiento.">
    <meta name="keywords" content="DEVA, esports, EJUAR, deportes electrónicos, videojuegos profesional, esports argentina, Gaming en DEVA">
    <title>Gaming - DEVA</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/componentes.css">
    <link rel="stylesheet" href="css/gaming.css">
    <link rel="icon" href="recursos/favicon.ico" type="image/x-icon">
    <script src="nav.js" defer></script>
</head>
<body>

    <header>
            <?php include("nav.php");?>
            <section class="heading_principal">
                <article>
                <h1>Gaming</h1>
                <p>Te mostramos las últimas novedades en el mundo del Esport, y te invitamos a que formes parte de nuestros diversos equipos.</p>
                </article>
            </section>
            
    </header>
        
    <main>      
                
                    
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
                                Valorant Champions Tour
                            </h4>
                            <p> Valorant Champions Tour es un programa oficial de Riot y otros colaboradores donde se realizarán torneos, dando visibilidad global a las competencias de Valorant, para mostrar lo que son los Esports de este juego y buscando darle continuidad a las competencias al más alto nivel competitivo.</p>
                            <a href="competencia-vct.php" class="boton-primario">
                            <p>Participar</p>
                            <div class="icon-arrow-right"></div>
                        </a>
                    </div>
            </div>        
        </div>


        </div>





                
        
            <div class="fondoblack">

                <!-- Calendario inicio -->

                <div class="main_calendar-container"><br>
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

                <!-- Calendario fin -->

                    <h3 class="streamers">Streamers</h3>

                    <div class="streamers_carousel">
                        <div class="spot_carousel1" >

                                <h5 class="nombre-streamer">Gustavo<br>Conyer</h5>

                        </div>
                        <div class="spot_carousel2">

                                    <h5 class="nombre-streamer">Sabrina<br>Carnevale</h5>
                                    <a href="streamers.php" class="boton-primario">
                                     <p>Ver perfil</p>
                                    <div class="icon-arrow-right"></div>
                                    </a>
                        </div>
                                    
                        <div class="spot_carousel3">
                    
                                <h5 class="nombre-streamer">Antonio<br>Savedra</h5>

                        </div>
                    
                    </div>


                    </div>
                

            <div class="wrapper_main-card-magenta">
                    <div class="main_card-magenta-info">
                        <h3>Sé parte del equipo</h3>
                        <p>Postulate para un puesto de colaborador voluntario en DEVA, la cual es una Asociación Civil sin fines de lucro.</p>
                        <a href="streamers.php" class="boton-primario">
                            <p>+Info</p>
                            <div class="icon-arrow-right"></div>
                        </a>
                    </div>
                </div>
            

        </main>

        <?php include('footer.php');?>

        <script src="index.js"></script>

</body>

</html>
