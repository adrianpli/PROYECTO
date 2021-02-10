<?php

namespace sistema;

class loginUser{
    

public $correoUser,$contraUser,$registro;

public function __construct()
{
    
}
function verificarUsuario(){
    

$conexion = new conexxion();

/*
$this->consulta=mysqli_prepare($conexion->conex, "SELECT * FROM usuarios WHERE CORREO = ? AND CONTRA = ?");
$this->consulta->bind_param("ss",$this->correoUser,$this->contraUser);
$this->consulta->execute();
$filas=$this->consulta->num_rows();
echo $filas;
*/

$log= "SELECT * FROM usuarios WHERE CORREO='$this->correoUser' AND CONTRA='$this->contraUser'";
$resultado=mysqli_query($conexion->conex, $log);
$filas=mysqli_num_rows($resultado);
$datos=mysqli_fetch_array($resultado,MYSQLI_NUM);
$nombreUs=$datos[1];
$apellidoP=$datos[2];
$apellidoM=$datos[3];




if($filas==1){?>

<script type=text/javascript>

window.location="http://localhost/PROYECTO/index.php?controller=sistema&action=principal&nombre=<?php echo $nombreUs ?>&apellidoP=<?php echo $apellidoP ?>&apellidoM=<?php echo $apellidoM ?>&b=1";
</script><?php

}



/*elseif($this->filas==0){
    echo $this->filas;?>
    <script>alert("No se pudo ingresar");
    window.location="http://localhost/PROYECTO/index.php?controller=sistema&action=login";</script>
    <?php
}*/


}
}

?>