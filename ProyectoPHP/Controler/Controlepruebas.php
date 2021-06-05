<?php
include("../model/ModelPrueba.php");

$query="select * from usuarios";
$clientsMatrix = ConsultarUsuario($query);
?>
