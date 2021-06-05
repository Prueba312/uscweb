<!DOCTYPE html>
<?php
require_once ('Controler/ControlerRegsProduct.php');
$guardar = NULL;

if (isset($_POST['DescPro'])) {
    $guardar = GuardarInfo();
}

echo'

<html lang="es">
    <head width="200" height="200">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Vista/CSS/Vistas.css">
        <link rel="stylesheet" type="text/css" href="Vista/CSS/Letra.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <div class="logins">
            <div class="logins-screen">
                <div class="app-title">
                </div>
                ';if ($guardar != NULl or $guardar!='')
                {
                     echo ' <div class="app-title">
                            <h1>'. $guardar .'</h1>
                            </div>';
                }
                echo '<div class="app-title">
                    <h1>Registro de producto</h1>
                </div>
                <form method="post" name="formulario" enctype="multipart/form-data" onsubmit="GuardarInfo()">
                    <div class="logins-form">
                        <div class="control-group">
                            <input type="text" class="logins-field" name="DescPro" placeholder="Producto" id="login-name">
                        </div>

                        <div class="control-group">
                            <input type="number" class="logins-field" name="PresPro" value="" placeholder="Precio" id="login-pass">
                        </div>

                        <div class="control-group">
                            <input type="number" class="logins-field" name="CantPro" value="" placeholder="Cantidad" id="login-pass">
                        </div>
                        <div class="control-group">
                            <input type="file" class="logins-field" name="ProcImagen" accept=".jpg,.png" id="login-pass">
                        </div>  
                        
                        <div class="control-group">
                            <input type="submit" class="btn btn-primary btn-large btn-block" value="Registrar" id="login-pass">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </body>
</html> ';
?>