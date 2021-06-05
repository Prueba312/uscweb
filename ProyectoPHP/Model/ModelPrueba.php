<?php
require_once("../Conexion/Conexion.php");
  function ConsultarUsuario($query)
  {
      $con = conectar();
      $Consulta = $con->query($query);
      
    while($f = $Consulta->fetch_object()){
        echo $f->Desc_Usuario;
    }
}