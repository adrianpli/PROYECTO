<?php

namespace sistema;

class eliminar
{
    public $idUser;
public function eliminarUsuario(){

            $conexion = new conexxion();
            $consulta = "DELETE FROM usuarios WHERE ID = $this->idUser";
            $consulta = mysqli_query($conexion->conex,$consulta);
            ?>
<script>
            window.location="http://localhost/PROYECTO/index.php?controller=sistema&action=principal";
</script>
<?php
}
}