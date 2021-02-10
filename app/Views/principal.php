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
  
   
    <style>

img {
    max-width: 100%;
}

html {
    box-sizing: border-box;
    font-size: 62.5%;
}

*,
*:before,
*:after {
    box-sizing: inherit;
}

body {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.6rem;
}

h1 {
    font-size: 3.8rem;
    font-family: 'Montserrat', sans-serif;
}

h2 {
    font-size: 3.4rem;
    font-weight: 400;
}

h3 {
    font-size: 3rem;
}

h4 {
    font-size: 2.6rem;
}

.site-header {
    background-size: cover;
    padding: 1rem;
    background-color: #00c942;
}

.navegacion {
    font-weight: 400;
    font-size: 2.1rem;
}

.navegacion:hover {
    font-style: italic;
    color: white;
}

.barra {
    margin: 1rem;
    display: flex;
    justify-content: space-between
}

.formulario {
    text-align: center;
}

.formulario input {
    margin-bottom: 2rem;
    border-radius: 5px;
    padding: .7rem;
}


.titulo {
    padding-top: 15rem;
}

.centrar-texto {
    text-align: center;
}

.boton {
    font-weight: 300;
    padding: .5rem;
    border-radius: 1rem;
    background-color: #4682b4;
    color: black;
}

.boton:hover {
    background-color: #00bfff;
    cursor: pointer;
}

.resultado {
    font-weight: 700;
    font-size: 4rem;
}

.nota {
    background-color: #00b347;
    padding: 1rem;
    border-radius: 1.5rem;
    display: grid;
    color: white;
}

@media (min-width: 768px) {
    .contenedor-grid {
        display: grid;
        grid-template-columns: 70% 30%;
    }
}

@media (min-width: 480px) {
    .divisora {
        background-color: #00c942;
        font-size: 3rem;
        padding-top: 1px;
        padding-bottom: 10px;
        margin-top: 1rem;
    }
}

@media (min-width: 768px) {
    .divisora {
        background-color: #00c942;
        font-size: 3rem;
        padding-top: 1px;
        padding-bottom: 10px;
        margin-top: 12rem;
    }
}
.footer{
    background-size: cover;
    padding: 1rem;
    background-color: #00c942;
    text-align:center;
}

    </style>


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
<span style="font-weight: 400;"> Bienvenido:  <?php echo strtoupper($_GET["nombre"]) ?>  </span>
      
   </div> 
<?php

}else{?>
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
        <input type="text" name="primerNombre" required value="<?php if(isset($_GET["nombre"])) echo strtoupper(($_GET["nombre"]));?>"><br>

        <label>Apellido Paterno </label>
        <input type="text" name="ApellidoPaterno" required value="<?php if(isset($_GET["apellidoP"])) echo strtoupper($_GET["apellidoP"]);?>"><br>

        <label>Apellido Materno</label>
        <input type="text" name="ApellidoMaterno" required value="<?php if(isset($_GET["apellidoM"])) echo strtoupper($_GET["apellidoM"])?>"><br>

        <label>Fecha de nacimiento</label>
        <input type="date" name="Nacimiento" value="2000-01-01" required><br>

       <input type="submit" value="Consultar" class="boton">

    </form>
    </div>
<p class="resultado centrar-texto">RFC: <span style="font-weight: 200;">  <?php if(isset($_GET["rfcgenerado"])) echo strtoupper($_GET["rfcgenerado"]) ?>   </span></p>

</main>

<footer>
<div class="footer">
    
<span style="font-weight: 400; font-size:2rem;">Todos los derechos reservados 2021 </span>

</footer>


</body>
</html>