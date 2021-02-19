<!doctype html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;700;900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/4428506a18.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="public/CSS/estilos.css">
    <title>Datos de usuario</title>
</head>
<body>
<header class="site-header">
    <div class="barra">
        <a href="http://localhost/PROYECTO/index.php?controller=sistema&action=principal&b=1" style="text-decoration: none; color:black;">
            <div>
                <span style="font-weight: 400; font-size:2rem;">Consulta</span><span style="font-weight: 700; font-size:3rem;">RFC</span>
        </a>
    </div>
    </div>
</header>
<style>
    .centrar-texto{
        text-align: center;
    }
    @media (min-width: 768px) {
        .formulario-grid{
            display: grid;
            grid-template-columns: 50% 50%;
            grid-gap: 2rem;

        }
        .contenido-derecha{
           justify-self: start;

        }
        .contenido-izquierda{
            justify-self: end;
        }
    }
</style>
<main>
<h1 class="centrar-texto" style="font-weight: 400">Datos de <?php if(isset($_SESSION["nombre"])) echo strtoupper(($_SESSION["nombre"]));?></h1>

    <form class="formulario" action="http://localhost/PROYECTO/index.php?controller=usuario&action=actualizarDatos" method="post">
        <div class="formulario-grid">
        <div class="contenido-izquierda">
        <label>Nombre</label><br>
        <input class="centrar-texto" type="text"  name="nombreInput" value="<?php if(isset($_SESSION["nombre"])) echo strtoupper(($_SESSION["nombre"])); ?>" >
            <br><label>Apellido paterno</label><br>
        <input class="centrar-texto" type="text" name="appInput" value="<?php if(isset($_SESSION["app"])) echo strtoupper($_SESSION["app"]);?>">
            <br> <label>Apellido materno</label><br>
            <input class="centrar-texto" type="text"  name="apmInput" value="<?php if(isset($_SESSION["apm"])) echo strtoupper($_SESSION["apm"]);?>">
        </div>
            <div class="contenido-derecha">
                <label>Correo</label><br>
                <input class="centrar-texto" type="text"  name="correoInput" value="<?php if(isset($_SESSION["correoUser"])) echo strtoupper($_SESSION["correoUser"]);?>">
                <br><label>Telefono</label><br>
                <input class="centrar-texto" type="text"  name="telefonoInput" value="<?php if(isset($_SESSION["telefono"])) echo strtoupper($_SESSION["telefono"]);?>">
                <br> <label>RFC</label><br>
                <input class="centrar-texto" type="text"  name="rfcInput" value="<?php if(isset($_SESSION["rfc"])) echo strtoupper($_SESSION["rfc"]);?>">
                <br>
            </div>
        </div>
        <br><input type="submit" class="boton" value="Editar Datos">

    </form>
    <center>
    <form action="http://localhost/PROYECTO/index.php?controller=usuario&action=eliminarCuenta" method="post">
        <input  type="submit" value="Eliminar cuenta" class="boton-rojo centrar-texto">
    </form>
    </center>
</main>
<footer>
    <div class="footer">
        <span style="font-weight: 400; font-size:2rem;">Todos los derechos reservados 2021 </span>
</footer>
</body>
</html>