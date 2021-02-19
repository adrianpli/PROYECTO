<?php

namespace sistema;

class loginUser extends conexxion {
public $correoUser,$contraUser,$registro;
public function __construct(){
    parent::__construct();
}
static function verificarUsuario($correoUser,$contraUser)
{

    $conexion = new conexxion();

    $consulta = "SELECT * FROM usuarios WHERE CORREO='$correoUser' and CONTRA='$contraUser'";
    $resultado = mysqli_query($conexion->conex, $consulta);
    $datos = mysqli_fetch_object($resultado);

    $_SESSION["id"] = $datos->ID;
    $_SESSION["nombre"] = $datos->NOMBRE;
    $_SESSION["app"] = $datos->AP_PATERNO;
    $_SESSION["apm"] = $datos->AP_MATERNO;
    $_SESSION["correoUser"] = $datos->CORREO;
    $_SESSION["telefono"] = $datos->TELEFONO;

    return true;
}
static function refrescarRFC($idUser){
    $conexion = new conexxion();
    $consulta = "SELECT RFC FROM usuarios WHERE ID = '$idUser'";
    $resultado = mysqli_query($conexion->conex, $consulta);
    $datos = mysqli_fetch_object($resultado);
    $_SESSION["rfc"] = $datos->RFC;
}
}

?>