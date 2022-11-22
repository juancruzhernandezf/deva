<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Asociación abocada a la profesionalización de los Deportes Electrónicos tanto desde un marco deportivo, como educativo y social o de entretenimiento.">
    <meta name="keywords" content="DEVA, esports, EJUAR, deportes electrónicos, videojuegos profesional, esports argentina">
    <title>Proyectos</title>
    <link rel="stylesheet" href="componentes.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="proyectos.css">
    <link rel="stylesheet" href="footer.css">
    <script src="nav.js" defer></script>
</head>

<body>
	
	<header>
  <?php include("nav.php");?>
  <section class="heading_principal">
    <article>
      <h1>proyectos</h1>
      <p>Innovando en el área del gaming desde 2017 con iniciativas de incorporación y profesionalización del deporte electrónico.</p>
    </article>
  </section>
</header>
	
	<main>
	
	<section class="competencias_y_calendario">
    	<h3>Próximamente</h3>
    <!-- Este container que sigue contiene la imagen del carousel en el css -->
        <article class="main_competencias-container">

        
            <div class="competencias_carousel">

                    <div class="botones-carousel">
                        <button id="anterior-competencia"><img src="recursos/chevron-left.svg" alt="Anterior Competencia"></button>

                        <button id="siguiente-competencia"><img src="recursos/chevron-right.svg" alt="Siguiente Competencia"></button>
                    </div>
                    <div class="container-celeste">
                            <h4>
                                Torneo de Esports para personas discapacitadas
                            </h4>
                            <p>Queremos crear la posibilidad de ofrecer controles adaptados para que personas con discapacidad puedan disfrutar de los videojuegos.</p>
                        <a href="juegos-bonaerenses.php" class="boton-primario">
                            <p>Ver más</p>
                            <div class="icon-arrow-right"></div>
                        </a>
                    </div>
            </div>        
        </article>
        </section>
		
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
                        <p>El parque temático abrió las puertas a su primera arena gamer totalmente gratuita y abierta al público y sus comunidades.</p>
                    </div>
                    <a href="proyectos/arena_gamer.html">
                        <p>ver más</p>
                    </a>
                </div>
                <div class="container">
                    <img src="recursos/proyectos-deporte-olimpico.png" alt="reconocer los esports como deporte olimpico">
                    <div>
                        <h3>reconocer los esports como deporte olímpico</h3>
                        <p>Impulsar la creación de una ley que regule los esports y a las personas que trabajan dentro del ámbito digital de manera profesional.</p>
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
		
		<section class="card_magenta-wrapper">
		<article class="main_card-magenta-info">
        <h3>¿Querés trabajar con nosotros?</h3>
            <p>Mandanos tu CV, el motivo por el cual te queres sumar a nuestra asociacion y cual es el área que más te interesaria ser parte.</p>
            <a href="certificaciones.html" class="boton-primario">
                <p>Enviar CV</p>
                <div class="icon-arrow-right"></div>
            </a>
    </article>
		</section>
		
	</main>
	
	<footer>

        <?php include('footer.php');?>

    </footer>
	
	<script src="index.js"></script>
	
	
</body>
</html>
