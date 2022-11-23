<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Asociación abocada a la profesionalización de los Deportes Electrónicos tanto desde un marco deportivo, como educativo y social o de entretenimiento.">
    <meta name="keywords" content="DEVA, esports, EJUAR, deportes electrónicos, videojuegos profesional, esports argentina">
    <title>Contactáte con DEVA</title>
    
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="contacto.css">
    <script src="nav.js" defer></script>
    
</head>

<body>

<header>
        <?php include("nav.php");?>
</header>

    

    <main>
        <div class="container">
            <div class="container-left">
                <h1>
                    Contactáte
                </h1>
                <h2>¡Dejános tu consulta, y nos pondremos en contacto con vos!</h2>
            </div>
            <div class="container-right">
                <form class="container-form" action="enviarMail.php" method="post">
                    


                    
                    <div class="item">
                        <!-- <label class="item-name" for="fname">Nombre Completo:</label> -->
                        <input class="item-input" type="text" class="main_formulario-inputs" name="Nombre" placeholder="Nombre" id="fname" required>
                    </div>

                    <div class="item email">
                        <!-- <label class="item-name" for="email">Email</label> -->
                        <input class="item-input" type="email" class="main_formulario-inputs" name="Email" placeholder="Email" id="email" required>
                    </div>
                    
                    <div class="item">
                        <select name="Asunto" id="main_formulario-selector" req>
                            <option value="" disabled selected hidden>Asunto</option>
                            <option value="Esports">Esports</option>
                            <option value="Información">Información</option>
                            <option value="Ayuda de Deva">Ayuda de parte de Deva</option>
                            <option value="Otros">Otros</option>
                        </select>
                    </div>

                    <div class="item">
                        <!-- <label class="item-name" for="comment">Mensaje:</label> -->
                        <textarea class="item-input" name="Mensaje" cols="30" rows="5" placeholder="Mensaje" id="comment"></textarea>
                    </div>

                    <input class="submit-button" type="submit" value="Enviar">
                    
                </form>
            </div>
        </div>
    </main>

    <?php include('footer.php');?>

</body>

</html>