<!doctype html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;700;900&display=swap" rel="stylesheet">
    <meta charset='Content-Type: text/html; charset=utf-8'>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/4428506a18.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="public/CSS/estilos.css">
    <title>Consulta RFC</title>
</head>
<body>
<header class="site-header">
    <div class="barra">
    <a href="" style="text-decoration: none; color:black;">
        <div>
   <span style="font-weight: 400; font-size:2rem;">Consulta</span><span style="font-weight: 700; font-size:3rem;">RFC</span>
   </a>
   </div>
<?php
if(isset($_GET["b"])&&$_GET["b"]==1){?>
<div class="navegacion">
<span style="font-weight: 400;"> Bienvenido: <a href="http://localhost/PROYECTO/index.php?controller=usuario&action=verPerfil">  <?php echo strtoupper($_SESSION["nombre"]) ?>  </span></a>
   </div>
    <div class="navegacion">
        <a style="text-decoration: none; color:black;" href="http://localhost/PROYECTO/index.php?controller=usuario&action=cerrarSesion" >Cerrar sesión</a>
    </div>
    <?php
}else{
    unset($_SESSION["id"],$_SESSION["nombre"],$_SESSION["app"],$_SESSION["apm"], $_SESSION["correoUser"],$_SESSION["telefono"] , $_SESSION["rfc"] ,$_SESSION["rfcgenerado"] );
    ?>
<div class="navegacion">
       <a style="text-decoration: none; color:black;" href="http://localhost/PROYECTO/index.php?controller=sistema&action=login" >Iniciar sesión</a>
   </div> 
<?php
}
?>
</div>
</header>
<div class="contenedor contenedor-grid">
<div class="contenido-izquierda">
<h1  class="centrar-texto titulo">Bienvenido al sistema de consulta de RFC</h1>
    <br>
    <p class="centrar-texto">Consulte su RFC gratuitamente</p>
    </div>
    <div class="contenido-derecha">
<p class="centrar-texto" >¿Que es el RFC?</p>
<div class="nota">
<p class="centrar-texto">El Registro Federal de Contribuyentes (o RFC) es una clave que requiere
 toda persona física o moral en México para realizar cualquier actividad económica lícita
  por la que esté obligada a pagar impuestos, con algunas excepciones. A estas personas se les llama contribuyentes. La clave debe incluir datos personales del contribuyente o persona física (por ejemplo, su nombre y fecha de nacimiento) o de la persona moral (por ejemplo, nombre y fecha de constitución de la persona moral). El registro se hace a través de internet, y en algunos casos, ante las oficinas del Servicio de Administración Tributaria de la Secretaria de Hacienda y Crédito Público, y es obligatorio para todos los que señale el Código Fiscal de la Federación.</p>
  </div>
</div>
</div>
<div class="divisora">
<p class="centrar-texto">Consultar RFC ahora</p>
<div class="centrar-texto">
<a href="#llenar">
<i class="fas fa-arrow-circle-down" style="text-decoration: none; color:black;"></i>
</a>
</div>
</div>
<main>
    <h2 class="centrar-texto" id="llenar">Ingrese los datos solicitados</h2>
    <div class="contenedor-formulario">
    <form action="http://localhost/PROYECTO/index.php?controller=sistema&action=crearRFC" method="POST" class="formulario">

    <label>Nombre(s) </label>
        <input type="text" name="primerNombre" required value="<?php if(isset($_SESSION["nombre"])) echo strtoupper(($_SESSION["nombre"]));?>"><br>

        <label>Apellido Paterno </label>
        <input type="text" name="ApellidoPaterno" required value="<?php if(isset($_SESSION["app"])) echo strtoupper($_SESSION["app"]);?>"><br>

        <label>Apellido Materno</label>
        <input type="text" name="ApellidoMaterno" required value="<?php if(isset($_SESSION["apm"])) echo strtoupper($_SESSION["apm"])?>"><br>

        <label>Fecha de nacimiento</label>
        <input type="date" name="Nacimiento" value="2000-01-01" required><br>

       <input type="submit" value="Consultar" class="boton">
    </form>
    </div>
<p class="resultado centrar-texto">RFC: <span style="font-weight: 200;">  <?php if(isset($_SESSION["rfcgenerado"])) echo strtoupper($_SESSION["rfcgenerado"]) ?>   </span></p>
</main>
<footer>
    <div class="footer">
        <span style="font-weight: 400; font-size:2rem;">Todos los derechos reservados 2021 </span>
    </div>
</footer>
</body>
</html>