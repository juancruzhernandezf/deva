<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Asociación abocada a la profesionalización de los Deportes Electrónicos tanto desde un marco deportivo, como educativo y social o de entretenimiento.">
    <meta name="keywords" content="DEVA, esports, EJUAR, deportes electrónicos, videojuegos profesional, esports argentina">
    <title>Institucional</title>
    <link rel="stylesheet" href="componentes.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="institucional.css">
    <link rel="stylesheet" href="footer.css">
    <script src="nav.js" defer></script>
</head>

<body>
	
	<header>
  <?php include("nav.php");?>
  <section class="heading_principal">
    <article>
      <h1>institucional</h1>
      <p>Informate sobre quienes somos, cuál es nuestra misión y cómo podés ser parte del equipo.</p>
    </article>
  </section>
</header>
	
	<main>
		
		<section class="main_secciones">
        <a href="organigrama.php"><div class="main_secciones-card">
           <h5>Organigrama</h5>
        </div></a>
        <a href="contacto.php"><div class="main_secciones-card">
            <h5>Contacto</h5>
        </div>
        </a>
        <a href="index.php"><div class="main_secciones-card">
            <h5>DEVA</h5>
        </div>
        </a>
    </section>
	
		<section class="main_seccion-grilla">           
            <article class="heading-grilla">
                <h2>prensa</h2> 
                <div id="filtro">
                    <p>filtrar</p>
                    <img src="recursos/chevron-down.svg" alt="chevron filtro">
                </div>
            </article>
            <article class="container_grilla">
                <div class="container">
                    <img src="recursos/institucional-prensa-oeste.png" alt="esports - oeste">
                    <div>
                        <h3>esports en el oeste</h3>
                        <p>El crecimiento de los esports, y su repercusión en los Juegos Bonaerenses.</p>
                    </div>
                    <a href="institucional/esports_oeste.html">
                        <p>ver más</p>
                    </a>
                </div>
                <div class="container">
                    <img src="recursos/institucional-prensa-lla2022.png" alt="definicion de la lla 2022">
                    <div>
                        <h3>definición de la lla 2022</h3>
                        <p>Te contamos el paso de Rainbow 7 en las "Lower Bracket" de la Liga Latinoamericana de League of Legends contra Isurus Gaming.</p>
                    </div>
                    <a href="institucional/lla_2022.html" class="boton_mas">
                        <p>ver más</p>
                    </a>
                </div>
                <div class="container">
                    <img src="recursos/institucional-prensa-aze.png" alt="aze nuevo campeon de la lla">
                    <div>
                        <h3>aze es el nuevo campeón de la lla.</h3>
                        <p>¿Querés saber cómo fue la partida entre Aze y Estral? ¡Vení a revivir con nosotros lo que nos dejó la final de la LLA el pasado sábado!</p>
                    </div>                    
                    <a href="institucional/aze-lla.html" class="boton_mas">
                        <p>ver más</p>
                    </a>
                </div>
                <div class="container">
                    <img src="recursos/institucional-prensa-gamergy.png" alt="gamergy argentina">
                    <div>
                        <h3>llegó la gamergy a argentina</h3>
                        <p>Todo lo que vivimos dentro de la primera edición de la "Flow Gamergy" en Argentina, el pasado fin de semana.</p>
                    </div>                    
                    <a href="institucional/flow-gamergy.html" class="boton_mas">
                        <p>ver más</p>
                    </a>
                </div>
            </article>    
            <button>
                <div class="arrow-down">
                    <img src="recursos/arrow_down.svg" alt="ver más">
                </div>
            </button> 
     </section>
		
	</main>
	
	<footer>

        <?php include('footer.php');?>

    </footer>
	
	<script src="index.js"></script>
	
	
</body>
</html>
