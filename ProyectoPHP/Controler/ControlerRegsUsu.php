<?php

include_once("model/ModelRegsUsu.php");

function Validacion_usu($Us_desk, $Us_pass)
{
    $query="SELECT COUNT(*) AS VALOR FROM `usuarios` where Desc_Usuario = '$Us_desk';";
    $Existente = EjecutarDB($query);
    $f = $Existente->fetch_object();
    if ($Us_desk !=NULL and $Us_desk !='' and $Us_pass !=NULL and $Us_pass !='' and $f->VALOR==0)
    {
        return true;
        
    }
    
    return false;
}


function GuardarInfo(){
    $Usuario=$_POST['Usu_desk'];
    $Pass=$_POST['Usu_pass'];
    $validacion = Validacion_usu($Usuario, $Pass,);
    if ($validacion)
    {
        $query="insert into usuarios values ('','$Usuario','$Pass');";
        EjecutarDB($query);
        return 'Usuario a sido guardado con exito';
    }
//    header('Location: ../../index.php?p=PgRegsProduct');
    
    return 'Campos vacios o usuario ya existente';
}

?>