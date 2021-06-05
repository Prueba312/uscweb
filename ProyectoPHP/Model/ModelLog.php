<?php
require_once("Conexion/Conexion.php");
    function EjecutarDBlog($query)
    {
        $con = conectar();
        $Consulta = $con->query($query);
        $con->close();
        return $Consulta;
    }
?>