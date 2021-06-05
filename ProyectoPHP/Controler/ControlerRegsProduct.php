<?php

include_once("model/ModelRegsProduct.php");

function Validar_produc($descri, $precio, $cantidad, $Imagen)
{
    if ($descri !=NULL and $descri !='' and $precio !=NULL and $precio !='' and $cantidad !=NULL and $cantidad !='')
    {
        return true;
        
    }
    
    return false;
}


function GuardarInfo(){
    $nombre_imagen=$_FILES['ProcImagen']['name'];
    $desk=$_POST['DescPro'];
    $Precio=$_POST['PresPro'];
    $Cantidad=$_POST['CantPro'];
    $carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/ProyectoPHP/Vista/Imagen/';
    move_uploaded_file($_FILES['ProcImagen']['tmp_name'], $carpeta_destino.$nombre_imagen);
    
    $validacion = Validar_produc($desk, $Precio, $Cantidad, $nombre_imagen);
    if ($validacion)
    {
        $query="insert into productos values ('','$desk','$Precio','$Cantidad','Vista/Imagen/$nombre_imagen');";
        ConsultarProducto($query);
        return 'Producto a sido guardado con exito';
    }
    

    

//    header('Location: ../../index.php?p=PgRegsProduct');
    
    return 'Campos vacios producto no guardado';
}
?>