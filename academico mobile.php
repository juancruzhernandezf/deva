<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEVA - Académico</title>
    <link rel="stylesheet" href="proyectos-academico mobile.css">
    <link rel="stylesheet" href="footer.css">
    <script src="nav.js" defer></script>
</head>
<body>

    <header>
        <?php include("nav.php");?>
    </header>

    <main>

<!-- componente banner -->

        <div class="banner_academico">
            <div class="texto_banner">
                <h1 class="título_banner">académico</h1>
                <p class="bajada_banner">Aprender sobre E-SPORTS te va a ayudar a expandir tus oportunidades de emprender, crecer y potenciar tu carrera.</p>
            </div>
        </div>
        
<!-- componente carrousel certificados -->

        <div class="container_carousel">
                <h2>certificados</h2>
                <div class="carousel">
                    <article class="main_carousel-scroll">
                        <div>
                            <h3>desarrollo de negocios esports</h3>
                            <p class="epigrafe">Inicio el Abril 2023 con modalidad virtual.</p>
                            <p>Vas a aprender a desenvolverte en la industria de deportes electrónicos de una manera eficiente y proactiva</p>
                            <a href="certificados/negocios_esports.html" class="carousel-1">
                                <p>Ver más</p>
                                <img src="recursos/flecha-botones.svg" alt="">
                            </a>
                        </div>
                    </article>
                </div>
        </div>

<!-- Componente Tarjeta "Se parte del equipo" -->

        <div class="main_card-magenta">
            <h3>Sé parte del equipo</h3>
            <p>Postulate para un puesto de colaborador voluntario en DEVA, la cual es una Asociación Civil sin fines de lucro.</p>
            <a href="equipo.html">
                <p>+info</p>
                <img src="recursos/flecha-botones.svg" alt="">
            </a>
        </div >

<!-- Contenido específico -->

        <div id="tarjeta_negro-academico">
            <h2>investigaciones</h2>
            <article id="box_academico">
                <div class="text_box">
                    <h2>dirección de formación e investigación científica</h2> 
                    <p>Aprender sobre ESPORTS te va a ayudar a expandir tus oportunidades de emprender, crecer y potenciar tu carrera.</p>
                </div>
            </article>
            <h2>programa académico</h2>
            <div class="container_programa">
                <img src="recursos/academico-diplomatura.png" alt="diplomatura:esports y videojuegos">
                <article>
                    <h3>diplomatura: deportes electónicos y videojuegos</h3>
                    <p>Duración: 6 meses</p>
                    <p>Se trata de una diplomatura de Extensión universitaria abierta a todo público, organizada por la Sede Andina de la Universidad Nacional de Río Negro (UNRN), a través de la Licenciatura en Diseño Artístico Audiovisual, junto a la Asociación de Deportes Electrónicos y Videojuegos de Argentina (DEVA). Brinda la posibilidad de capacitación y aprendizaje, no sólo a los integrantes de la comunidad universitaria sino también a la sociedad en su conjunto.</p>
                    <a href="diplomatura/esports_y_videjuegos.html" class="boton_info_cian">
                        <p>+info</p>
                        <img src="recursos/flecha-botones-cian.svg" alt="">
                    </a>
                </article>
            </div>
            <div class="container_programa">
                <img src="recursos/academico-desarrollo.png" alt="desarrollo de videojuegos 2d">
                <article>
                    <h3>desarrollo de videojuegos en 2d</h3>
                    <p>Duración: 2 meses</p>
                    <p>Destinatado para chicos/as y adolescentes entre 12 y 16 años aproximadamente.</p>
                    <p>En este curso adquirirás las habilidades básicas para programar y diseñar tus propios juegos 2D e introducirte en el fascinante mundo del desarrollo de videojuegos. Al finalizar el curso, te llevarás tu propio juego y con las herramientas aprendidas, podrás seguir creando y divirtiéndote en casa.</p>
                    <a href="desaarrollo_videojueos_2d.html" class="boton_info_cian">
                        <p>+INFO</p>
                        <img src="recursos/flecha-botones-cian.svg" alt="">
                    </a>
                </article>
            </div>
            <div class="container_programa">
                <img src="recursos/academico-master.png" alt="master en gestión de esports">
                <article>
                    <h3>máster en gestión de esports</h3>
                    <p>Duración: 13 meses</p>
                    <p>El objetivo principal del máster es capacitarte en la utilización de los instrumentos de gestión para que puedas reconocer oportunidades de negocio, establecer estrategias, anticiparte a los cambios, optimizar recursos y analizar la información con criterio, sin que el tiempo ni el lugar representen un obstáculo adaptando el ritmo de estudio a tu carga de trabajo individual y tu disponibilidad.</p>
                    <a href="master_gestion_esports.html" class="boton_info_cian">
                        <p>+INFO</p>
                        <img src="recursos/flecha-botones-cian.svg" alt=""> 
                    </a>
                </article>
            </div>
        </div>

<!-- Hasta acá el contenido específico --> 

        <div class="main_galeria-carousel">
            <h2>galería</h2>
            <div>
                <article class="chevrones_galeria">
                <img src="recursos/chevron-carrusel.svg" alt="" class="chevron_galeria-left">
                <img src="recursos/chevron-carrusel.svg" alt="" class="chevron_galeria-right">
                </article>
                <img src="recursos/academico-galeria-izquierda.png" alt="">
                        
            </div>
        </div>

        <div class="main_card-magenta">
            <h3>Contactate con DEVA</h3>
                <p>Si estás interesado en saber un poco más de nosotros, o tenés una consulta, estaremos más que comprometidos en responderte lo antes posible.</p>
                <a href="contacto.html">
                    <p>+info</p>
                    <img src="recursos/flecha-botones.svg" alt="">
                </a>
        </div>
    </main>

    <footer>
        <?php include('footer.php');?>
    </footer>

</body>

</html>