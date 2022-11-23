<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="DEVA, esports, EJUAR, deportes electrónicos, videojuegos profesional, esports argentina, aprender sobre esports, Valorant Champions Tour, DEVA Valorant">
    <link rel="stylesheet" href="css/componentes.css">
    <link rel="stylesheet" href="css/competencia-vct.css">
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
                <h1>Valorant Champions Tour</h1>
                <p>Convertite en el representante internacional de nuestro país.</p>
                <a href="formulario.php" class="boton-primario">
                    <p>Participar</p>
                    <div class="icon-arrow-right"></div>
                </a>
            </article>
        </section>
    </header>

    <main>
         <div class="vct_text-wrapper">  
        <h2>
        Información del Campeonato
        </h2>

        <p>Valorant Champions Tour es un programa oficial de Riot y otros colaboradores donde se realizarán torneos, dando visibilidad global a las competencias de Valorant, para mostrar lo que son los Esports de este juego y buscando darle continuidad a las competencias al más alto nivel competitivo.</p>

        <p>En noviembre de 2020, Riot Games anunció el primer Tour de Campeones de Valorant, una serie de torneos divididos en tres niveles: Challengers, Masters y Champions . Challengers actuaría como el nivel más bajo, dividido en seis regiones. Los equipos que superen Challengers pasarían a Masters, donde los equipos ya no estarían divididos por regiones, y los 16 mejores equipos de Masters pasarían a Champions, el torneo final de VCT. En febrero de 2021, anunciaron VCT Game Changers, una iniciativa de torneo complementaria para mujeres y géneros marginados.</p>

        <p>Se celebrarán dos torneos de libre inscripción en 2 regiones: Latinoamérica Norte y Latinoamérica Sur, con cupo limitado por torneo a 128 equipos.</p>

        <p><strong>LAN:</strong> Colombia, Ecuador, México, Venezuela, Centroamérica e islas del caribe.</p>
        <p><strong>LAS:</strong> Argentina, Bolivia, Chile, Paraguay, Perú y Uruguay.</p>

        <p>Del 23 al 26 de junio, Argentina va a ser el país que aloje las primeras finales con público. La sede elegida fue el Centro Costa Salguero en Buenos Aires, en un pabellón que cuenta con capacidad para recibir a 1.000 asistentes.</p>
        </div> 
        <div class="main_card-magenta-info">
            <h3>Requisitos</h3>
            <p>Informate sobre todos los requisitos necesarios para poder participar de esta edición del torneo y disfrutar al máximo tu experiencia Valorant.</p>

            <a href="requisitos.php" class="boton-primario">
                <p>+Info</p>
                <div class="icon-arrow-right"></div>
            </a>

        </div>

        <div class="main_mapas">
        <h3>Ubicación</h3>
        <p>Centro Costa Salguero</p>
        <p>Av. Costanera Rafael Obligado 1221, C1425 CABA</p>

        <iframe class="mapa-desktop" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.3371905435697!2d-58.39764978477114!3d-34.57033368046815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5ebb33d8e3f%3A0x5674c7e3a362345b!2sAv.%20Costanera%20Rafael%20Obligado%201221%2C%20C1425%20CABA!5e0!3m2!1ses-419!2sar!4v1669222262717!5m2!1ses-419!2sar" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


        <iframe class="mapa-mobile" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.3371905435697!2d-58.39764978477114!3d-34.57033368046815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5ebb33d8e3f%3A0x5674c7e3a362345b!2sAv.%20Costanera%20Rafael%20Obligado%201221%2C%20C1425%20CABA!5e0!3m2!1ses-419!2sar!4v1669222262717!5m2!1ses-419!2sar" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
    
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

        <a href="formulario.php" class="boton-primario">
                <p>Participar</p>
                <div class="icon-arrow-right"></div>
        </a>

            <div class="main_card-magenta-info">
            <h3>Contactate con DEVA</h3>
            <p>Si estás interesado en saber un poco más de nosotros, o tenes una consulta, estaremos más que comprometidos en responderte lo antes posible.</p>

            <a href="formulario.php" class="boton-primario" id="boton-participar">
                <p>+Info</p>
                <div class="icon-arrow-right"></div>
            </a>

        </div>




    </main>

    <?php include('footer.php'); ?>
    
</body>

</html>