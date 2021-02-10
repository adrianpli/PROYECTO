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
    $usuario = new loginUser();
    $usuario->correoUser=$_POST["correo"];
    $usuario->contraUser=$_POST["contra"];
    $usuario->verificarUsuario();
    
}

public function crearRFC(){

$generar = new generar();
$generar->nombreUsuario=$_POST["primerNombre"];
$generar->apellidoP=$_POST["ApellidoPaterno"];
$generar->apellidoM=$_POST["ApellidoMaterno"];
$generar->fechaNac=$_POST["Nacimiento"];
$generar->generarRFC();

}
}

?>