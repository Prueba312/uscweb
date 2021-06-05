<?php
require_once("Conexion/Conexion.php");
    function EjecutarDB($query)
    {
        $con = conectar();
        $Consulta = $con->query($query);
        $con->close();
        return $Consulta;
    }
?>