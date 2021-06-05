<!DOCTYPE html>
<?php
include("Controler/ControlerlListProduc.php");
$query = QueryConsulta();
?>
<html lang="es">
    <head width="200" height="200">
        <meta charset="UTF-8">
        <link rel='stylesheet' type="text/css" href="Vista/CSS/Vistas.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <table align='center' class="blueTable">
            <thead>
                <tr>
                    <th colspan="4" align='center'><H2>Productos</H2></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th width="50%" align='center'><H3>Producto</H3>
                    <th width="10%" align='center'><H3>Codigo</H3></th>
                    <th width="10%" align='center'><H3>Precio</H3></th>
                    <th width="10%" align='center'><H3>Cantidad disponible</H3></th>
                </tr>
                <?php
                while ($f = $query->fetch_object()){
                ?>
                <tr>

                    <td align='center'><H3><?php echo $f->Desc_producto?></H3></td>
                    <td align='center'><H3><?php echo $f->ID_producto?></H3></td>
                    <td align='center'><H3><?php echo $f->Precio_Producto?></H3></td>
                    <td align='center'><H3><?php echo $f->Cant_Producto?></H3></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        
    </body>
    

</html>
