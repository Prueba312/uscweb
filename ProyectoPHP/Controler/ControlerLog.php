<?php

include_once("model/ModelLog.php");

function Validar()
{
    $Usuario=$_POST['User_desk'];
    $Pass=$_POST['psw'];
    
    $query="SELECT COUNT(*) AS VALOR FROM `usuarios` where Desc_Usuario ='$Usuario' and Pasd_Usuario='$Pass';";
    $Existente = EjecutarDBlog($query);
    $f = $Existente->fetch_object();
    if ($Usuario !=NULL and $Usuario !='' and $Pass !=NULL and $Pass !='' and $f->VALOR>0)
    {
        
        $_SESSION['usuario']=$Usuario;
        return $_SESSION['usuario'];
        
    }
    
    return null;
}
function Salir()
{
    $_SESSION['usuario']='';
    return null;
}
?>