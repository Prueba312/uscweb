<?php
include("model/ModelListSolicitudes.php");
    function QueryConsulta(){
        $query="SELECT ID_Solicitud,Desc_producto,Cantidad_solicitud_Pro,Fecha FROM `solicitud_producto` inner join productos ON solicitud_producto.ID_producto = productos.ID_producto;";
        $ProductoList = ConsultarProducto($query);
        return $ProductoList;
    }
?>