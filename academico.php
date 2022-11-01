<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Académico</title>
</head>
<body>

    <?php include("header.php");?>

    <main>

<!-- componente banner -->

        <div class="banner">
            <img src="img/img_academico.png" alt="academico">
            <div class="texto_banner">
                <h1 class="título_banner">académico</h1>
                <p class="bajada_banner">aprender sobre E-SPORTS te va a ayudar a expandir tus oportunidades de emprender, crecer y potenciar tu carrera.</p>
            </div>
        </div>
<!-- componente carrousel certificados -->

    <div class="container_carousel">
            <h2>certificados</h2>
            <div class="carousel">
                
                <article class="main_carousel-scroll">
                    <img src="recursos/negocios.png" alt="desarrollo de negocios esports">
                    <div>
                        <h3>desarrollo de negocios esports</h3>
                        <p>inicio el abril 2023 con modalidad virtual.</p>
                        <P>El parque temático abrió las puertas de su primera arena gamer totalmente gratuita y abierta al público y sus comunidades.</P>
                        <a href="certificados/negocios_esports.html" class="carousel-1">
                            <p>Ver más</p>
                            <div class="icon-arrow-right"></div>
                        </a>
                    </div>
                </article>
                <article class="main_carousel-scroll">
                    <h3>desarrollo de videojuegos en 2d</h3>
                    <p>inicio el abril 2023 con modalidad virtual.</p>
                    <P>destinatado para chicos/as y adolescentes entre 12 y 16 años aproximadamente.En este curso adquirirás las habilidades básicas para programar y diseñar tus propios juegos 2D e introducirte en el fascinante mundo del desarrollo de videojuegos. Al finalizar el curso, te llevarás tu propio juego y con las herramientas aprendidas, podrás seguir creando y divirtiéndote en casa.</P>
                    <a href="certificados/desarrollo.html" class="carousel-1">
                        <p>Ver más</p>
                        <div class="icon-arrow-right"></div>
                    </a>
                </article>
                <article class="main_carousel-scroll">
                    <h3>deportes electrónicos y videojuegos</h3>
                    <p>inicio el abril 2023 con modalidad virtual.</p>
                    <p>se trata de una diplomatura de Extensión universitaria abierta a todo público, organizada por la Sede Andina de la Universidad Nacional de Río Negro (UNRN), a través de la Licenciatura en Diseño Artístico Audiovisual, junto a la Asociación de Deportes Electrónicos y Videojuegos de Argentina (DEVA). Brinda la posibilidad de capacitación y aprendizaje, no sólo a los integrantes de la comunidad universitaria sino también a la sociedad en su conjunto.</p>
                    <a href="certificados/esports_y_videojuegos.html" class="carousel-1">
                        <p>Ver más</p>
                        <div class="icon-arrow-right"></div>
                    </a>
                </article>
            </div>
        </div>
    </div>

<!-- Componente Tarjeta "Se parte del equipo" -->

     <div class="main_card_magenta">
            <h3>Sé parte del equipo</h3>
            <p>Postulate para un puesto de colaborador voluntario en DEVA, la cual es una Asociación Civil sin fines de lucro.</p>
            <a href="equipo.html" class="boton_info">
                <p>+INFO</p>
                <div class="icon-arrow-right"></div>
            </a>
    </div >

<!-- Contenido específico -->

    <div class="tarjeta_negro">
            <h2>INVESTIGACIONES</h2>
            <div class="container_carousel">
                <div class="carousel">
                    <article class="main_carousel-scroll">
                        <img src="recursos/DFIC.png" alt="dirección de formaciíon e investigación científica">
                        <div class="text_box">
                            <h3>dirección de formaciíon e investigación científica</h3>
                            <p>inicio el abril 2023 con modalidad virtual.</p>
                            <P>otorgamos credibilidad, marco teórico y rigurosidad científica a los estudios, tesis, trabajos, artículos e investigaciones sobre el Deporte Electrónico y a los Videojuegos en Argentina.</P>
                            <a href="certificados/negocios_esports.html" class="carousel-1">
                                <p>Ver más</p>
                                <div class="icon-arrow-right"></div>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
    </div>
    

<!-- Hasta acá el contenido específico --> 

  <div id="galeria">
            <form action="#" id="filtro1">
                <label for="filtro2">filtro</label>
                <select name="filtro" id="filtro2">
                    <option value="recientes">recientes</option>
                    <option value="relevancia">relevancia</option>
                </select>
            </form>
            <ul id="galería">
                <li class="galeria_item">
                    <img src="img/arena_gamer.png" alt="arena gamer tecnopolis">
                    <h3>Arena gamer - tecnópolis</h3>
                    <p>El parque temático abrió las puertas de su primera arena gamer totalmente gratuita y abierta al público y sus comunidades.</p>
                    <a href="arena_gamer.html" class="galeria_vermas">
                        <p>VER MÁS</p>
                    </a>
                </li>
                <li class="galeria_item">
                    <img src="img/esports_olímpico.png" alt="esport como deporte olímpico">
                    <h3>Reconocer los e-sports como deporte olímpico</h3>
                    <p>Impulsar la creación de una ley que regule los e-sports y las personas que trabajan dentro del ámbito digital de manera profesional. </p>
                    <a href="esport_olímpico.html" class="galeria_vermas">
                        <p>VER MÁS</p>
                    </a>
                </li>
                <li class="galeria_item">
                    <img src="img/torneo_femenino.png" alt="torneo femenino para ligas mayores">
                    <h3>Torneo femenino para ligas mayores</h3>
                    <p>En noviembre se llevó a cabo el evento femenino más importante del año, con el objetivo de fomentar la participación de las mujeres en los e-sports.</p>
                    <a href="torneo_femenino_mayores.html" class="galeria_vermas">
                        <p>VER MÁS</p>
                    </a>
                </li>
                <li class="galeria_item">
                    <img src="img/videojuegos_adicciones.png" alt="arena gamer tecnopolis">
                    <h3>Videojuegos, adicción y su relación</h3>
                    <p>Charla preventiva sobre la adicción a la pantalla desde temprana edad y posibles mecanismos de acción para la prevención de esta problemática.</p>
                    <a href="videojuegos_adicciones.html" class="galeria_vermas">
                        <p>VER MÁS</p>
                    </a>
                </li>
            </ul>
            <a href="">
                <img src="img/arrow_down.svg" alt="ver más">
            </a>
        </div>

        <div id="trabaja">
            <h3>¿Querés trabajar con nosotros?</h3>
            <p>Mandanos tu CV, el motivo por el cual te querés sumar a nuestra asociación y cuál es el área que más te interesaría ser parte.</p>
            <a href="torneo_discapacitados.html" class="carousel ">
                <p>ENVIÁ TU CV</p>
                <div class="icon-arrow-right"></div>
            </a>
        </div>  
    </main>

    <?php include('footer.php');?>

    <script src="academico.js"></script>

</body>
</html>