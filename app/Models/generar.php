<?php

namespace sistema;

class generar{

public $nombreUsuario,$apellidoP,$apellidoM,$fechaNac;

public function __construct()
{
}
function generarRFC(){
    header('Content-Type: text/html; charset=utf-8');
$arrayNombre = str_split($this->nombreUsuario);
$arrayApp = str_split($this->apellidoP);
$arrayApm = str_split($this->apellidoM);
$fecha = strtotime($this->fechaNac);

$diaNac = date("d",$fecha);
$mesNac = date("m",$fecha);
$anioNac = date("Y",$fecha);

$arrayAnio = str_split($anioNac);
$arrayMes = str_split($mesNac);
$arrayDia = str_split($diaNac);

$primerLetraApellidoP = "";
$segundaLetraApellidoP = "";
$primerLetraApellidoM = "";
$primerLetraNombre = "";

//VERIFICA CARACTERES EN NOMBRE
if ($arrayNombre[0] >= chr(65) && $arrayNombre[0] <= chr(90)){
        $primerLetraNombre = $arrayNombre[0];
    }else{
        $primerLetraNombre="X";
    }
//VERIFICA CARACTERES EN APELLIDO PATERNO
if($arrayApp[0] >= chr(65) && $arrayApp[0] <= chr(90)) {
    $primerLetraApellidoP = $arrayApp[0];
    $segundaLetraApellidoP = $arrayApp[1];
}else{
    $primerLetraApellidoP = "X";
    $segundaLetraApellidoP = $arrayApp[2];
}
//VERIFICA CARACTERES EN APELLIDO MATERNO
if ($arrayApm[0] >= chr(65) && $arrayApm[0] <= chr(90)){
        $primerLetraApellidoM = $arrayApm[0];
    }else{
        $primerLetraApellidoM = "X";
    }

    $RFCgen = $primerLetraApellidoP. $segundaLetraApellidoP. $primerLetraApellidoM. $primerLetraNombre.$arrayAnio[2].$arrayAnio[3].$arrayMes[0].$arrayMes[1].$arrayDia[0].$arrayDia[1];

return $RFCgen;

}
static function enviarRFC($rfcGenerado,$idUser){
    $conexion = new conexxion();
    $consulta = "UPDATE usuarios SET RFC= '$rfcGenerado' WHERE ID = $idUser";
    $resultado = mysqli_query($conexion->conex,$consulta);
    }
}

?>