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
    <title>Consulta RFC</title>
</head>
<body>
<header class="site-header">
<div class="barra">
    <a href="http://localhost/PROYECTO/index.php?controller=sistema&action=principal" style="text-decoration: none; color:black;">
        <div>
   <span style="font-weight: 400; font-size:2rem;">Consulta</span><span style="font-weight: 700; font-size:3rem;">RFC</span>
   </a>
   </div>
</header>
<main>
<h2 class="centrar-texto" id="llenar">Ingrese los datos solicitados</h2>
    <div class="contenedor-formulario">
    <form action="http://localhost/PROYECTO/index.php?controller=sistema&action=verificarRegistro" method="POST" class="formulario">
    <label>Nombre(s) </label><br>
        <input type="text" name="Nombre" required size="30"><br>

        <label>Apellido Paterno </label><br>
        <input type="text" name="ApellidoPaterno" required size="30"><br>

        <label>Apellido Materno</label><br>
        <input type="text" name="ApellidoMaterno" required size="30"><br>

        <label>Numero telefonico</label><br>
        <input type="text" name="telefono" required size="30"><br>

        <label>Correo electronico</label><br>
        <input type="text" name="correo" required size="30"><br>

        <label>Contraseña</label><br>
        <input type="password" name="contra" required size="30"><br>

       <input type="submit" value="Registarse" class="boton">
    </form>
    </div>
</main>
<footer>
    <div class="footer">
        <span style="font-weight: 400; font-size:2rem;">Todos los derechos reservados 2021 </span>
</footer>
</body>
</html>