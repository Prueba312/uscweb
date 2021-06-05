<?php
include("model/ModelListSolicitudes.php");
    function QueryConsulta(){
        $query="SELECT * FROM `productos` ORDER BY `productos`.`Desc_producto` DESC";
        $ProductoList = ConsultarProducto($query);
        return $ProductoList;
    }
?>