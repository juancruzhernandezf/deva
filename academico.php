<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>DEVA - Académico</title>
    <link rel="stylesheet" href="css/componentes.css">
    <link rel="stylesheet" href="css/academico.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="nav.js" defer></script>
</head>
<body>
    <header>
        <?php include("nav.php");?>
        <section class="heading_principal">
            <article>
                <h1>académico</h1>
                <p>Aprender sobre E-SPORTS te va a ayudar a expandir tus oportunidades de emprender, crecer y potenciar tu carrera.</p>
            </article>
        </section>
    </header>

    <main>

    <!-- Carrousel 1-->
    <section class="container-carousel-principal">
        <article class="carousel_principal">
            <h2>certificados</h2>
            <div class="carousel_principal-izquierda">
                <img src="recursos/arena_gamer.png" alt="Fotografía de computadoras en Arena Gamer">
            </div>
            <div class="carousel_principal-derecha">
                <div class="carousel_text-container">
                <h3>desarrollo de negocios esports</h3>
                <p>Inicio el Abril 2023 con modalidad virtual.</p>
                <p>Vas a aprender a desenvolverte en la industria de deportes electrónicos de una manera eficiente y proactiva</p>
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

    <!-- Fin Carrousel 1-->

    <!-- Se parte del Equipo -->
    <section class="main_card-magenta-wrapper">
        <article class="main_card-magenta-info">
                <h3>Sé parte del equipo</h3>
                    <p>Postulate para un puesto de colaborador voluntario en DEVA, la cual es una Asociación Civil sin fines de lucro. </p>
                    <a href="equipo.html" class="boton-primario">
                        <p>+Info</p>
                        <div class="icon-arrow-right"></div>
                    </a>
        </article>
    </section>
    <!-- Fin de parte del Equipo -->

  <section class="card_negro">         
        <article class="competencias_y_calendario">
                <h2>investigaciones</h2>
                <div class="main_competencias-container">
                    <div class="competencias_carousel">
            
                        <div class="botones-carousel">
                                    <button id="anterior-competencia"><img src="recursos/chevron-left.svg" alt="Anterior Competencia"></button>

                                    <button id="siguiente-competencia"><img src="recursos/chevron-right.svg" alt="Siguiente Competencia"></button>
                        </div>
                            <div class="container-celeste">
                                <h4>
                                    dirección de formación e investigación científica
                                </h4>
                                <p>Otorgamos credibilidad, marco teórico y rigurosidad científica a los estudios, tesis, trabajos, artículos e investigaciones sobre el Deporte Electrónico y a los Videojuegos en Argentina.</p>
                                <a href="juegos-bonaerenses.php" class="boton-primario">
                                    <p>Ver más</p>
                                    <div class="icon-arrow-right"></div>
                                </a>
                            </div>
                        
                    </div>
                </div>           
        </article>
        
        <article class="programa">
            <h2>programa académico</h2>
            <div class="container-programa">
                <img src="recursos/academico-diplomatura.png" alt="diplomatura:esports y videojuegos">
                <div class="container-text">
                    <div>
                        <h3>diplomatura: deportes electónicos y videojuegos</h3>
                        <p>Duración: 6 meses</p>
                    </div>
                    <p>Se trata de una diplomatura de Extensión universitaria abierta a todo público, organizada por la Sede Andina de la Universidad Nacional de Río Negro (UNRN), a través de la Licenciatura en Diseño Artístico Audiovisual, junto a la Asociación de Deportes Electrónicos y Videojuegos de Argentina (DEVA). Brinda la posibilidad de capacitación y aprendizaje, no sólo a los integrantes de la comunidad universitaria sino también a la sociedad en su conjunto.</p>
                    <a href="diplomatura/esports_y_videjuegos.html" class="boton-primario">
                        <p>+info</p>
                        <div class="icon-arrow-right"></div>
                    </a>
                </div>
            </div>
            <div class="container-programa-reverse">
                <img src="recursos/academico-desarrollo.png" alt="desarrollo de videojuegos 2d">
                <div class="container-text">
                    <div>
                        <h3>desarrollo de videojuegos en 2d</h3>
                        <p>Duración: 2 meses</p>    
                    </div>
                    <p>En este curso adquirirás las habilidades básicas para programar y diseñar tus propios juegos 2D e introducirte en el fascinante mundo del desarrollo de videojuegos. Al finalizar el curso, te llevarás tu propio juego y con las herramientas aprendidas, podrás seguir creando y divirtiéndote en casa.</p>
                    <a href="diplomatura/esports_y_videjuegos.html" class="boton-primario">
                        <p>+info</p>
                        <div class="icon-arrow-right"></div>
                    </a>
                </div>
            </div>
            <div class="container-programa">
                <img src="recursos/academico-master.png" alt="diplomatura:esports y videojuegos">
                <div class="container-text">
                    <div>
                        <h3>máster en gestión de esports</h3>
                        <p>Duración: 13 meses</p>
                    </div>
                    <p>El objetivo principal del máster es capacitarte en la utilización de los instrumentos de gestión para que puedas reconocer oportunidades de negocio, establecer estrategias, anticiparte a los cambios, optimizar recursos y analizar la información con criterio, sin que el tiempo ni el lugar representen un obstáculo adaptando el ritmo de estudio a tu carga de trabajo individual y tu disponibilidad.</p>
                    <a href="diplomatura/master_gestion_esports.html" class="boton-primario">
                        <p>+info</p>
                        <div class="icon-arrow-right"></div>
                    </a>
                </div>
            </div>
        </article>
    </section>


    <!-- Galería -->

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

    <!-- Fin Galería -->

    <section class="contacto">
        <article class="main_card-magenta-wrapper">
            <div class="main_card-magenta-info">
                <h3>Contactate con DEVA</h3>
                    <p>Si estás interesado en saber un poco más de nosotros, o tenes una consulta, estaremos más que comprometidos en responderte lo antes posible.</p>
                    <a href="equipo.html" class="boton-primario">
                        <p>+Info</p>
                        <div class="icon-arrow-right"></div>
                    </a>
            </div>
        </article> 
    </section>    
   
    </main>

    <?php include('footer.php');?>


</body>
</html>