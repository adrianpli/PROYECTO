<?php

require 'app/Models/registro.php';
require 'app/Models/conexxion.php';
require 'app/Models/loginUser.php';
require 'app/Models/generar.php';

use sistema\conexxion;
use sistema\loginUser;
use sistema\registro;
use sistema\generar;

class sistemaController{
    //VISTAS
function registrarse(){
    require "app/Views/registrer.php";
}
function principal(){
    require "app/Views/principal.php";
} 
function login(){
    require "app/Views/login.php";
}
    //PETICIONES
public function verificarRegistro(){

$registroins = new registro();
$registroins->nombre=$_POST["Nombre"];
$registroins->apellidoPaterno=$_POST["ApellidoPaterno"];
$registroins->apellidoMaterno=$_POST["ApellidoMaterno"];
$registroins->telefono=$_POST["telefono"];
$registroins->correo=$_POST["correo"];
$registroins->contra=$_POST["contra"];
$registroins->registrarUsuario();
}
public function verificarUsuario(){
    if (isset($_POST["contra"]) && isset($_POST["correo"])) {
        $correo = $_POST["correo"];
        $contra = $_POST["contra"];
        $verificar=loginUser::verificarUsuario($correo,$contra);
      if ($verificar){
          ?>

          <script type=text/javascript>
              window.location="http://localhost/PROYECTO/index.php?controller=sistema&action=principal&b=1";
          </script><?php
      }else{
          require "app/Views/login.php";
          echo "<h1 class='centrar-texto'>Datos incorrectos</h1>";
      }
    }else{
        echo "datos incorrectos";
        return false;
    }
}
public function crearRFC(){

$generar = new generar();
$generar->nombreUsuario=$_POST["primerNombre"];
$generar->apellidoP=$_POST["ApellidoPaterno"];
$generar->apellidoM=$_POST["ApellidoMaterno"];
$generar->fechaNac=$_POST["Nacimiento"];
$_SESSION["rfcgenerado"]=$generar->generarRFC();
generar::enviarRFC($generar->generarRFC(),$_SESSION["id"]);
    ?>
    <script type=text/javascript>
        window.location="http://localhost/PROYECTO/index.php?controller=sistema&action=principal&b=1";
    </script>
    <?php
}
}

?>