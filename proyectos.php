<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEVA - Proyectos</title>
    <link rel="stylesheet" media="(max-width: 58rem)" href="proyectos-academico_mobile.css"/>
    <link rel="stylesheet" media="(min-width: 58.1rem)" href="proyectos-academico.css"/>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="nav.css">
    <script src="nav.js" defer></script>
</head>
<body>

    <header>
        <?php include("nav.php");?>
    </header>

    <main>

<!-- componente banner -->

        <div class="banner_proyectos">
            <div class="texto_banner">
                <h1 class="título_banner">proyectos</h1>
                <p class="bajada_banner">Innovando en el área de gaming desde 2017 con iniciativas de incorporación y profecionalización del deporte electrónico.</p>
            </div>
        </div>

        <h2 class="subtitle">próximamente</h2>
        <article id="box_proyectos">
            <div class="text_box">
                <div>
                    <h2>torneo de esports para personas discapacitadas</h2> 
                    <p>Queremos crear la posibilidad de ofrecer controles adaptados para que personas con discapacidad puedan disfrutar de los videojuegos.</p>
                </div>
                <a href="proyectos/torneo_discapacitados.html" class="boton_info">
                    <p>+info</p>
                    <div class="icon-arrow-right"><img src="recursos/flecha-botones.svg" alt=""></div>
                </a>
            </div>
        </article>

<!-- Contenido específico -->

        <div class="tarjeta_negro" class="desktop">
           <table>
                <tr>
                    <td>
                        <div class="container_proyectos">
                            <img src="recursos/proyectos-arena-gamer.png" alt="arena gamer - tecnópolis">
                            <article>
                                <h3>arena gamer - tecnópolis</h3>
                                <p>El parque temático abrio puertas a su primer arena gamer totalmente gratuita y abierta al público y sus comunidades.</p>
                            </article>
                            <a href="proyectos/arena_gamer.html" class="boton_mas">
                                <p>ver más</p>
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="container_proyectos">
                            <img src="recursos/proyectos-deporte-olimpico.png" alt="reconocer los esports como deporte olimpico">
                            <article>
                                <h3>reconocer los esports como deporte olímpico</h3>
                                <p>Impulsar la creación de una ley que regule los esports y las personas que trabajan dentro del ámbito digital de manera profesional.</p>
                            </article>
                            <a href="proyectos/esports_olimpicos.html" class="boton_mas">
                                <p>ver más</p>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="container_proyectos">
                            <img src="recursos/proyectos-torneo-femenino.png" alt="torneo femenino para ligas mayores">
                            <article>
                                <h3>torneo femenino para ligas mayores</h3>
                                <p>En noviembre se llevó a cabo el evento femenino más importante del año, con el objetivo de fomentar la participación de las mujeres en los esports.</p>
                            </article>
                            <a href="proyectos/torneo_femenino_mayores.html" class="boton_mas">
                                <p>ver más</p>
                            </a>
                        </div>
                    </td>
                    <td>
                        <div class="container_proyectos">
                            <img src="recursos/proyectos-adicciones.png" alt="videojuegos, adicciones y su relación">
                            <article>
                                <h3>videojuegos, adicciones y su relación</h3>
                                <p>Charla preventiva sobre la adicción a la pantalla desde temprana edad y posibles mecanismos de acción para la prevención de esta problemática.</p>
                            </article>
                            <a href="proyectos/videojuegos_adicciones.html" class="boton_mas">
                                <p>ver más</p>
                            </a>
                        </div>
                    </td>
                </tr>
           </table>     
            <a href="proyectos/todos.html">
                <img src="recursos/flecha-abajo.svg" alt="ver más proyectos" class="arrow_down">
            </a>
        </div>
        <div class="tarjeta_negro" class="mobile">
            <ul>
                 <li class="container_proyectos">
                     <img src="recursos/proyectos-arena-gamer.png" alt="arena gamer - tecnópolis">
                     <article>
                         <h3>arena gamer - tecnópolis</h3>
                         <p>El parque temático abrio puertas a su primer arena gamer totalmente gratuita y abierta al público y sus comunidades.</p>
                     </article>
                     <a href="proyectos/arena_gamer.html" class="boton_mas">
                         <p>ver más</p>
                     </a>
                 </li>
                 <li class="container_proyectos">
                     <img src="recursos/proyectos-deporte-olimpico.png" alt="reconocer los esports como deporte olimpico">
                     <article>
                         <h3>reconocer los esports como deporte olímpico</h3>
                         <p>Impulsar la creación de una ley que regule los esports y las personas que trabajan dentro del ámbito digital de manera profesional.</p>
                     </article>
                     <a href="proyectos/esports_olimpicos.html" class="boton_mas">
                         <p>ver más</p>
                     </a>
                 </li>
                 <li class="container_proyectos">
                     <img src="recursos/proyectos-torneo-femenino.png" alt="torneo femenino para ligas mayores">
                     <article>
                         <h3>torneo femenino para ligas mayores</h3>
                         <p>En noviembre se llevó a cabo el evento femenino más importante del año, con el objetivo de fomentar la participación de las mujeres en los esports.</p>
                     </article>
                     <a href="proyectos/torneo_femenino_mayores.html" class="boton_mas">
                         <p>ver más</p>
                     </a>
                 </li>
                 <li class="container_proyectos">
                     <img src="recursos/proyectos-adicciones.png" alt="videojuegos, adicciones y su relación">
                     <article>
                         <h3>videojuegos, adicciones y su relación</h3>
                         <p>Charla preventiva sobre la adicción a la pantalla desde temprana edad y posibles mecanismos de acción para la prevención de esta problemática.</p>
                     </article>
                     <a href="proyectos/videojuegos_adicciones.html" class="boton_mas">
                         <p>ver más</p>
                     </a>
                 </li>                
            </ul>     
         </div>

<!-- Hasta acá el contenido específico --> 
        <div id="main_card-magenta-cv">
            <h3>¿Querés trabajar con nosotros?</h3>
            <p>Mandanos tu CV, el motivo por el cual te queres sumar a nuestra asociacion y cual es el área que más te interesaria ser parte.</p>
            <a href="contacto.html">
                <p>enviar cv</p>
                <img src="recursos/flecha-botones.svg" alt="">
            </a>
        </div>
        
    </main>

    <footer>
        <?php include('footer.php');?>
    </footer>

</body>

</html> 