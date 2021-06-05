<?php
echo'
<html lang="es">
    <head width="200" height="200">
        <title align = "left">MASCOTIENDA</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Vista/CSS/Vistas.css">
        <header> 
            <div>
                <img src="Vista/Imagen/Imagen.png" float="center">
            </div>
            <ul>
                <li class="$pagina =="PgMenu" ? "active" : "";"><a href="?p=PgMenu">Menu</a></li>
                <li class="$pagina =="PgListProduc" ? "active" : "";"><a href="?p=PgListProduc">Producto</a></li>
                <li class="$pagina =="PgRegsProduct" ? "active" : ""; "><a href="?p=PgRegsProduct">Registrar producto</a></li>
                <li class="$pagina =="PgGaleria" ? "active" : ""; "><a href="?p=PgGaleria">Galeria</a></li>
                <li class="$pagina =="PgRegsSolicit" ? "active" : ""; "><a href="?p=PgRegsSolicit">Solicitudes</a></li>
                <li class="$pagina =="PgListSolicitudes" ? "active" : ""; "><a href="?p=PgListSolicitudes">Listado de solicitudes</a></li>
            </ul>
        </header>';
?>
