<!DOCTYPE html>
<?php
include("Controler/ControlerlListProduc.php");
$query = QueryConsulta();
?>
<html lang="es">
    <head width="200" height="200">
        <title align = "left">MASCOTIENDA</title>
        <meta charset="UTF-8">
        <link rel='stylesheet' type="text/css" href="Vista/CSS/Vistas.css">
        <link rel='stylesheet' type="text/css" href="Vista/CSS/Galeria.css">
    </head>
    <body>
        <body>
         <?php
        while ($f = $query->fetch_object()){
        ?>
        <div class="gallery">
            <img src="<?php echo $f->Ruta_Img?>">
          <div class="desc"><?php echo $f->Desc_producto?></div>
        </div>
        <?php
            }
        ?>
    </body>
</html>
