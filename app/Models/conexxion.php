<?php

namespace sistema;

class conexxion{

public $conex;
    public function __construct()
    {
        $host="localhost";
        $user="root";
        $contra="";
        $base="usuariosrfc";
        $this->conex = mysqli_connect($host, $user, $contra, $base);
    }

}
?>