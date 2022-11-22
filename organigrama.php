<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEVA - Organigrama</title>
    <link rel="stylesheet" href="componentes.css">
    <link rel="stylesheet" href="organigrama.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="footer.css">
    <script src="nav.js" defer></script>
</head>
<body>
    <header>

    <div class="video-deva">
    <video autoplay muted plays-inline loop id="video-home-deva" alt="Video Institucional DEVA">
    <source src="recursos/home-video-deva.mp4" type="video/mp4">
    </video>
    </div>
    <?php include("nav.php");?>

    </header>
    <main>
        <h1>organigrama</h1>
        <section class="comision">
            <h2>comisión directiva</h2>
            <article class="container-comision">
                <div class="card">
                    <img src="recursos/organigrama-presidente.png" alt="Presidente Guillermo Vázquez" id="presidente">
                    <div class="miembros-txt">
                        <h3>guillermo vázquez</h3>
                        <p>Presidente</p>
                    </div>
                </div>
            </article>
            <article class="container-comision">
                <div class="card">
                    <img src="recursos/organigrama-secretario.png" alt="">
                    <div class="miembros-txt">
                        <h3>matías ganduglia</h3>
                        <p>Secretario</p>
                    </div>
                </div>
                <div class="card">
                    <img src="recursos/organigrama-tesorero.png" alt="">
                    <div class="miembros-txt">
                        <h3>iara barrientos ghistolfo</h3>
                        <p>Tesorero</p>
                    </div>
                </div>  
            </article>
            <article class="container-comision container-mobile">
                <div class="card">
                    <img src="recursos/organigrama-crespo.png" alt="">
                    <div class="miembros-txt">
                        <h3>florencia crespo</h3>
                        <p>Dirección de Formación e Investigación Científica</p>
                    </div>
                </div>
                <div class="card">
                    <img src="recursos/organigrama-anezin.png" alt="">
                    <div class="miembros-txt">
                        <h3>lucas anezin</h3>
                        <p>Director de Sistemas</p>
                    </div>
                </div>
                <div class="card">
                    <img src="recursos/organigrama-sotelo.png" alt="">
                    <div class="miembros-txt">
                        <h3>jeremías sotelo</h3>
                        <p>Director de Comunicación</p>
                    </div>
                </div>
                <div class="card">
                    <img src="recursos/organigrama-antueno.png" alt="">
                    <div class="miembros-txt">
                        <h3>hernán antueno</h3>
                        <p>Director de RRHH</p>
                    </div>
                </div>
            </article>
        </section>
        <section class="card_magenta-wrapper">
            <article class="main_card-magenta-info">
                    <h3>Sé parte del equipo</h3>
                        <p>Postulate para un puesto de colaborador voluntario en DEVA, la cual es una Asociación Civil sin fines de lucro. </p>
                        <a href="equipo.html" class="boton-primario">
                            <p>+Info</p>
                            <div class="icon-arrow-right"></div>
                        </a>
            </article>
        </section>
    </main>

    <?php include('footer.php');?>

    <script src="index.js"></script>
    
</body>
</html>