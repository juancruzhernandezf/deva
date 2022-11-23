<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="DEVA, esports, EJUAR, deportes electrónicos, videojuegos profesional, esports argentina, aprender sobre esports, DEVA streamers">
    <link rel="stylesheet" href="css/componentes.css">
    <link rel="stylesheet" href="css/streamers.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="nav.js" defer></script>
    <title>Valorant Champions Tour - DEVA</title>
    <link rel="icon" href="recursos/favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <?php include("nav.php");?>
        <section class="heading_principal">
            <article>
                <h1>Nuestros Streamers</h1>
                <p>Conocé a nuestros representantes en las principales plataformas de streaming.</p>
                
            </article>
        </section>
    </header>

    <main>
    <div class="wrapper-main">


    <div class=streamers-wrapper>
        <div class="button-streamers">
                    <button id="anterior-streamer"><img src="recursos/chevron-left.svg" alt="Anterior Imagen"></button>
        </div>


        <div class="streamers-datos">

        <div class="container-left">
            <img src="recursos/sabrina.png" alt="Imagen de nuestra Streamer Sabrina Carnevale">
        </div>

        <div class="container-right">

        <h3>
            Sabrina Carnevale
        </h3>

        <div class="datos-container-right">

        <ul class="lista-datos">
            <li class="datos-streamer-container">
            <p class="title-datos-streamer">Edad:</p> <p>19 años</p>
            </li>

            <li class="datos-streamer-container">
                <p class="title-datos-streamer">Provincia de Origen:</p> <p>Santa Cruz</p>
            </li>

            <li class="datos-streamer-container">
        
            <div><p class="title-datos-streamer">Categorías de streaming:</p>
            <ul>
                <li>Just Chatting</li>
                <li>Valorant</li>
                <li>League of Legends</li>
            </ul>
            </div>
            </li>

            <li class="datos-streamer-container">
                <a href="calendario-sabrina.php">
            
                <p class="title-datos-streamer" >Ver calendario de Streaming</p>
                <img src="recursos/icon-arrow-next.png" alt="">
                </a>
            </li>

            <li class="datos-streamer-container">
                <p class="title-datos-streamer">Sobre Sabrina:</p>
                <p>Sabri o Sabrina Carnevale nació el 25 de febrero del 2003 en Buenos Aires, Argentina. Es chica es streamer, tiktoker, instagramer, youtuber, modelo y una de las jóvenes de Latinoamérica que más impulsa la cultura de la aceptación corporal y la inclusión de las mujeres en competencias de calibre internacional de juegos que a día de hoy, tienen un público en su mayoría masculino.</p>
            </li>
        </ul>
            
        

        </div>


        </div>





        </div>



        <div class="button-streamers">
                    <button id="siguiente-streamer"><img src="recursos/chevron-right.svg" alt="Siguiente Imagen"></button>
        </div>
    
    </div>
    









    <div class="main_galeria">
            
            <div class="heading-galeria">
                <h2>galería</h2>
                <a href="galeria.php">Ver más</a>
            </div>
            <div class="carousel_galeria">
                <div class="imagenes_galeria">
                    <img src="recursos/galeria1.png" alt="Chica gamer jugando en evento Juegos Bonaerenses">
                    <img class="desk" src="recursos/galeria2.png" alt="Chica gamer jugando en AGS2022">
                    <img class="desk" src="recursos/galeria3.png" alt="Equipo CSGO compitiendo en AGS 2022">
                </div>
                <div class="botones-carousel-galeria">
                    <button id="anterior"><img src="recursos/chevron-left.svg" alt="Anterior Imagen"></button>
                    <button id="siguiente"><img src="recursos/chevron-right.svg" alt="Siguiente Imagen"></button>
                </div>
            </div>                                    
        </div>

        </div>

        <div class="main_card-magenta-wrapper">
            
            <div class="main_card-magenta-info">
                <h3>Sé parte del equipo</h3>
                <p>Postulate para un puesto de colaborador voluntario en DEVA, la cual es una Asociación Civil sin fines de lucro. </p>

                <a href="contacto.php" class="boton-primario">
                    <p>Contactate</p>
                    <div class="icon-arrow-right"></div>
                </a>

            </div>

        </div>
    </main>

    <?php include('footer.php'); ?>