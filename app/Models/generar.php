<?php

namespace sistema;

class generar{

public $nombreUsuario,$apellidoP,$apellidoM,$fechaNac;


public function __construct()
{
    
}

function generarRFC(){

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



if(strcmp($arrayApp[0], chr(165))==0 || strcmp($arrayApp[0],chr(164))==0){
    
    $arrayApp[0]=chr(88);
    $RFCgen = $arrayApp[0]. $arrayApp[1]. $arrayApm[0]. $arrayNombre[0].$arrayAnio[2].$arrayAnio[3].$arrayMes[0].$arrayMes[1].$arrayDia[0].$arrayDia[1]."salideif";
    ?>
<script type=text/javascript>

window.location="http://localhost/PROYECTO/index.php?controller=sistema&action=principal&nombre=<?php echo $this->nombreUsuario ?>&apellidoP=<?php echo $this->apellidoP ?>&apellidoM=<?php echo $this->apellidoM ?>&b=1&rfcgenerado= <?php echo $RFCgen ?>";
</script>

<?php
}


}



}

?>