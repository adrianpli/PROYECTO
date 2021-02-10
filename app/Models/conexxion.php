<?php

namespace sistema;

class conexxion{

public $conexion;
public $conex;
    public $host="localhost";
    public $user="root";
    public $contra="";
    public $base="usuariosrfc";

    public function __construct()
    {
        $this->conex = mysqli_connect($this->host, $this->user, $this->contra, $this->base);
    }

}


?>