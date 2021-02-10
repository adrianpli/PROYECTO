<?php

namespace sistema;

class registro{

public $nombre,$apellidoPaterno,$apellidoMaterno,$correo,$contra,$telefono;

public function __construct(){
  
}

function registrarUsuario(){
$hhh = new conexxion();
$consulta = mysqli_prepare($hhh->conex, "INSERT INTO usuarios (NOMBRE,AP_PATERNO,AP_MATERNO,TELEFONO,CORREO,CONTRA) VALUES (?,?,?,?,?,?)");
$consulta->bind_param("ssssss",$this->nombre,$this->apellidoPaterno,$this->apellidoMaterno,$this->telefono,$this->correo,$this->contra);
$consulta->execute();

if($consulta==TRUE){?>

    <script type=text/javascript>
    
    window.location="http://localhost/PROYECTO/index.php?controller=sistema&action=principal";
    </script><?php
    
    }

}

}

?>





