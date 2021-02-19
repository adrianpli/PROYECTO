<?php

namespace sistema;

class actualizar{
    public $nombre,$apellidoPaterno,$apellidoMaterno,$correo,$telefono;
public function modificarDatos($idUser){
    $conexion = new conexxion();
   $consulta = mysqli_prepare($conexion->conex, "UPDATE usuarios SET NOMBRE = ?, AP_PATERNO = ?, AP_MATERNO = ?, TELEFONO = ?, CORREO = ? WHERE  ID = $idUser");
    $consulta->bind_param("sssss",$this->nombre,$this->apellidoPaterno,$this->apellidoMaterno,$this->telefono,$this->correo);
    $consulta->execute();
    ?>
    <script type=text/javascript>
        window.location="http://localhost/PROYECTO/index.php?controller=usuario&action=verPerfil";
    </script><?php

}
static function refrescarDatos($idUser){
    $conexion = new conexxion();
    $consulta = "SELECT * FROM usuarios WHERE ID = $idUser";
    $resultado = mysqli_query($conexion->conex, $consulta);
    $datos = mysqli_fetch_object($resultado);

    $_SESSION["id"] = $datos->ID;
    $_SESSION["nombre"] = $datos->NOMBRE;
    $_SESSION["app"] = $datos->AP_PATERNO;
    $_SESSION["apm"] = $datos->AP_MATERNO;
    $_SESSION["correoUser"] = $datos->CORREO;
    $_SESSION["telefono"] = $datos->TELEFONO;

}
}