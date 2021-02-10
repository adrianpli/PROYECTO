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
margin-top: 7%;
}

.formulario input {
    margin-bottom: 2rem;
    border-radius: 5px;
    margin-top: 1rem;
    padding: .7rem;
    
}

@media (min-width: 768px) {
    .contenedor-formulario {
      
        padding-top: 2.5rem; 
    }
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
    display: end;
    background-size: cover;
    padding: 1rem;
    background-color: #00c942;
    text-align:center;
    position: absolute;
    bottom: 0;
    width: 100%;
}

    </style>


    <title>Iniciar sesion</title>
</head>
<body>
<header class="site-header">
    <div class="barra">
    <a href="http://localhost/PROYECTO/index.php?controller=sistema&action=principal" style="text-decoration: none; color:black;">
        <div>
   <span style="font-weight: 400; font-size:2rem;">Consulta</span><span style="font-weight: 700; font-size:3rem;">RFC</span>
   </a>
   </div>
   
</div>
</header>


<main>


    
<h2 class="centrar-texto" id="llenar">Inicie sesión</h2>
    <div class="contenedor-formulario">
    <form action="http://localhost/PROYECTO/index.php?controller=sistema&action=verificarUsuario" method="POST" class="formulario">
   
        <label>Correo electronico</label><br>
        <input type="text" name="correo" required size="30"><br>

        <label>Contraseña</label><br>
        <input type="password" name="contra" required size="30"><br>
<br>
        ¿No tienes cuenta?<a href="http://localhost/PROYECTO/index.php?controller=sistema&action=registrarse"> Registrate aqui</a>
<br><br>
       <input type="submit" value="Iniciar sesión" class="boton">

    </form>
    </div>




</main>

<footer>
<div class="footer">
<span style="font-weight: 400; font-size:2rem;">Todos los derechos reservados 2021 </span>
</footer>


</body>
</html>