<?php

require 'app/Models/conexxion.php';
require 'app/Models/loginUser.php';
require 'app/Models/actualizar.php';
require 'app/Models/eliminar.php';

use sistema\conexxion;
use sistema\loginUser;
use sistema\actualizar;
use sistema\eliminar;

class usuarioController
{
public function verPerfil(){
    actualizar::refrescarDatos($_SESSION["id"]);
    loginUser::refrescarRFC($_SESSION["id"]);
    require "app/Views/datosUsuario.php";

}
public function actualizarDatos(){
    $update = new actualizar();
    $update -> nombre = strtoupper($_POST["nombreInput"]) ;
    $update -> apellidoPaterno = strtoupper($_POST["appInput"]) ;
    $update -> apellidoMaterno = strtoupper($_POST["apmInput"]) ;
    $update -> correo = strtoupper($_POST["correoInput"]) ;
    $update -> telefono = strtoupper($_POST["telefonoInput"]) ;
    $update -> modificarDatos($_SESSION["id"]);
}
public function eliminarCuenta(){

   $elim = new eliminar();
   $elim->idUser=$_SESSION["id"];
   $elim->eliminarUsuario();
}
public function cerrarSesion(){
    unset($_SESSION["id"],$_SESSION["nombre"],$_SESSION["app"],$_SESSION["apm"], $_SESSION["correoUser"],$_SESSION["telefono"] , $_SESSION["rfc"] ,$_SESSION["rfcgenerado"] );
    ?>
<script>
    window.location="http://localhost/PROYECTO/index.php?controller=sistema&action=principal";
</script>
<?php
}
}