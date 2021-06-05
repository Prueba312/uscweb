<?php

include_once("model/ModelRegsSolicit.php");

function Validar_soli($descri, $cantidad, $Fecha)
{
    if ($descri !=NULL and $descri !='' and $Fecha !=NULL and $Fecha !='' and $cantidad !=NULL and $cantidad !='')
    {
        return true;
        
    }
    
    return false;
}


function GuardarInfo(){
    $desk=$_POST['Desc_Prod'];
    $Cantidad=$_POST['Cant_Prod'];
    $Fecha=$_POST['Cant_fecha'];
    $validacion = Validar_soli($desk, $Cantidad, $Fecha);
    if ($validacion)
    {
        $query="insert into solicitud_producto values ('','$desk','$Cantidad','$Fecha');";
        EjecutarDB($query);
        return 'Solicitud a sido guardado con exito';
    }
//    header('Location: ../../index.php?p=PgRegsProduct');
    
    return 'Campos vacios solicitud no guardado';
}

function QueryConsulta(){
    $query="SELECT ID_producto,Desc_producto FROM `productos` order by Desc_producto asc";
    $ProductoList = EjecutarDB($query);
    return $ProductoList;
}
?>