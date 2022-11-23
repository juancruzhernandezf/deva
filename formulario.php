<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="DEVA, esports, Valorant Champions Tour, Valorant, deportes electrónicos, videojuegos profesional, esports argentina, Torneos Valorant, Formulario Valorant Champions Tour">
    <link rel="stylesheet" href="css/componentes.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="nav.js" defer></script>
    <title>Formulario Inscripción - Torneos DEVA</title>
</head>
<body>
    
<header>

    <?php include('nav.php'); ?>

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

        <div class="pasos-formulario">

        <div class="paso-filled">1</div>
        <div class="paso-outline">2</div>
        <div class="paso-outline">3</div>
        <div class="paso-outline">4</div>

        </div>

        

        <form action="enviarMail.php" method="post">
            <h3>Datos Personales</h3>
            <div class="item">
                <label for="fname">Nombre</label>
                <input type="text" placeholder="Escribe tu nombre" name="Nombre" id="fname">
            </div>

            <div class="item">
                <label for="lastname">Apellido</label>
                <input type="text" name="apellido" id="lastname" placeholder="Escribe tu apellido">
            </div>
            
            <div class="wrapper-datos">
                <div class="item">
                    <label for="nacimiento">Fecha de Nacimiento</label>
                    <input type="date" name="nacimiento" id="nacimiento">
                </div>

                <div class="item dni">
                    <label for="selector_dni" class="label-hidden">Tipo de Documento</label>
                    <select name="dni" id="selector_dni">
                        <option value="" disabled selected hidden>DNI</option>
                        <option value="DNI">DNI</option>
                        <option value="Pasaporte">Pasaporte</option>
                        <option value="Cédula de Identidad">Cédula de Identidad</option>
                    </select>
                </div>
                
                <div class="item">
                    <label for="numero-dni">Número</label>
                    <input type="number" name="numero-dni" id="numero-dni" placeholder="Número">
                </div>
                
                <div class="item">
                    <select name="genero" id="main_formulario-selector">
                        <option value="" disabled selected hidden>Género</option>
                        <option value="femenino">Femenino</option>
                        <option value="masculino">Masculino</option>
                        <option value="no-binario">No binario</option>
                    </select>
                </div>
            </div>

            <div class="item">
                <label for="nacionalidad">Nacionalidad</label>
                <input type="text" name="nacionalidad" id="nacionalidad" placeholder="Escribe tu nacionalidad">
            </div>
            <input type="submit" value="Siguiente" class="boton-primario" id="submit_formulario">

        </form>

          

    </main>

    <?php include('footer.php'); ?>




</body>
</html>