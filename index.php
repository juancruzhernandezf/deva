<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEVA - Haciendo crecer los e-sports en Argentina</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php include("header.php");?>
    <main>
        <video controls preload="metadata" alt="Video de Presentación de DEVA" autoplay muted>
            <source src="http://www.example.com/waterfall-video.webm" type="video/webm">
            Tu navegador no soporta videos.
        </video>
        

        <div class="main_texto-principal">
            <H1>DEVA es el gran motor que promociona y desarrolla los deportes electrónicos en el país.</H1>
            <h2>DEVA</h2>
            <p>Somos DEVA, una asociación civil nacida el 7 de Mayo de 2017 y estamos abocados a promocionar y trabajar en pos de la profesionalización de los Deportes Electrónicos tanto desde un marco deportivo, como educativo y social o de entretenimiento.  Está conformado por un grupo de jóvenes profesionales que comparten una gran pasión por el deporte y amor por los videojuegos.</p>
            <a href="about.html">
                <p>+INFO</p>
                <div class="icon-arrow-right"></div>
            </a>
        </div>

        <div class="main_card-proyectos"> <!--SI QUIERO APLICAR SECTION, SEGUN MDN LA SECCION DEBERÍA TENER UN H1 TAMBIEN, ES ASI ESTO?
        CITO: https://developer.mozilla.org/es/docs/Web/HTML/Element/Heading_Elements
        Con el elemento <section>, debe considerar evitar usar <h1> más de una vez en una página; por costumbre, se usa para mostrar el título de la página, con todos los encabezados debajo de éste comenzando con <h2>. Cuando se usan secciones, debe usarse un <h1> por sección. Véase Definiendo secciones en Secciones y esquema de un documento HTML5 para más información.
        
        -->
            <h2>PROYECTOS</h2>
            <div class="carousel">
                <article class="main_carousel-scroll">
                    <h3>AGS 2022</h3>
                    <P>Durante el fin de semana que se dará lugar el AGS FLOW 2022 tendremos competencias de alto nivel, entre ellas, estarán nuestros seleccionados de CSGO, E-Football y Mobile Legends.</P>
                    <a href="proyectos/arena-gamer.html" class="carousel_arena-gamer">
                        <p>Ver más</p>
                        <div class="icon-arrow-right"></div>
                    </a>
                </article>
                <article class="main_carousel-scroll">
                    <h3>Arena Gamer - Tecnópolis</h3>
                    <P>El parque temático abrió las puertas de su primera arena gamer totalmente gratuita y abierta al público y sus comunidades.</P>
                    <a href="proyectos/arena-gamer.html" class="carousel_arena-gamer">
                        <p>Ver más</p>
                        <div class="icon-arrow-right"></div>
                    </a>
                </article>
                <article class="main_carousel-scroll">
                    <h3>Juegos Bonaerenses</h3>
                    <P>Desde 2017 hemos logrado incorporar a los Deportes Electrónicos como disciplina deportiva dentro de los Juegos Bonaerenses, una competencia donde participan más de 340 mil jóvenes de toda la Provincia de Bs As.</P>
                    <a href="proyectos/arena-gamer.html" class="carousel_arena-gamer">
                        <p>Ver más</p>
                        <div class="icon-arrow-right"></div>
                    </a>
                </article>
                <article class="main_carousel-scroll">
                    <h3>EJUAR</h3>
                    <P>Los Juegos Universitarios Argentinos son la competencia oficial del Ministerio de Educación en conjunto con la Federación del Deporte Universitario Argentino con más de 160 universidades participantes.</P>
                    <a href="proyectos/arena-gamer.html" class="carousel_arena-gamer">
                        <p>Ver más</p>
                        <div class="icon-arrow-right"></div>
                    </a>
                </article>
            </div>
        </div>
    <!-- Hasta acá el carousel de proyectos -->

    <div class="main_card-magenta">
        <h3>Certificaciones</h3>
            <p>Enterate de todo lo que necesitás saber para obtener la certificación DEVA y los requisitos para inscribirte.</p>
            <a href="certificaciones.html">
                <p>+INFO</p>
                <div class="icon-arrow-right"></div>
            </a>
    </div>

    <div class="main_calendar-container">
        <h3>Calendario</h3>
        <div class="main_calendar">
            <p>CALENDAR PLACEHOLDER</p>
            <!-- PREPARANDO EL CALENDARIO SIN CSS 
                <ol>
                <li>Lun</li>
                <li>Mar</li>
                <li>Mié</li>
                <li>Jue</li>
                <li>Vie</li>
                <li>Sáb</li>
                <li>Dom</li>

                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li>10</li>
                <li>11</li>
                <li>12</li>
                <li>13</li>
                <li>14</li>
                <li>15</li>
                <li>16</li>
                <li>17</li>
                <li>18</li>
                <li>19</li>
                <li>20</li>
                <li>21</li>
                <li>22</li>
                <li>23</li>
                <li>24</li>
                <li>25</li>
                <li>26</li>
                <li>27</li>
                <li>28</li>
                <li>29</li>
                <li>30</li>
                <li>31</li>
            </ol>
            -->
        </div>
    </div>
    <!-- Hasta acá llega el calendario -->


    <div class="main_secciones">
        <div class="main_secciones-card">
            <h5>Investigaciones</h5>
        </div>
        <div class="main_secciones-card">
            <h5>Streamers</h5>
        </div>
        <div class="main_secciones-card">
            <h5>Competencias</h5>
        </div>
        <div class="main_secciones-card">
            <h5>Prensa</h5>
        </div>
    </div>

    <div class="main_galeria-carousel">
        <div>
            <a href="#"><img src="#" alt="anterior foto"></a>
            <img src="#" alt="Foto1">
            <a href="#"><img src="#" alt="siguiente foto"></a>
        </div>
    </div>

    <div class="main_card-magenta">
        <h3>Contactate con DEVA</h3>
            <p>Si estás interesado en saber un poco más de nosotros, o tenés una consulta, estaremos más que comprometidos en responderte lo antes posible.</p>
            <a href="contacto.html">
                <p>+INFO</p>
                <div class="icon-arrow-right"></div>
            </a>
    </div>

    </main>

    <footer>
        <h6>Suscribite al Newsletter</h6>
        <form action="newsletter.php" method="post">
            <input type="email">
            <input type="submit">
        </form>
        <div class="footer_redes-sociales">
            <a href="https://www.facebook.com/devaesportsarg/"><img src="#" alt="Facebook logo" class="redes-sociales"></a>
            <a href="https://www.instagram.com/devaesportsarg/"><img src="#" alt="Instagram logo" class="redes-sociales"></a>
            <a href="https://twitter.com/devaesportsarg"><img src="#" alt="Twitter logo" class="redes-sociales"></a>
            <a href="https://www.youtube.com/channel/UCV5CADvqp-yeTfAiHUcW_VQ"><img src="#" alt="Youtube logo" class="redes-sociales"></a>
        </div>
    </footer>


</body>
</html>