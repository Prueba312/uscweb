<!DOCTYPE html>
<?php
require_once ('Controler/ControlerRegsSolicit.php');
$guardar = NULL;
$lista = QueryConsulta();
if (isset($_POST['Desc_Prod'])) {
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
                    <h1>Solicitud de productos</h1>
                </div>
                <form method="post" name="formulario" onsubmit="GuardarInfo()">
                    <div class="logins-form">
                    <div class="control-group">
                    <select class="logins-field" name="Desc_Prod">';
                    while ($f = $lista->fetch_object()){
                        echo '<option value="'. $f->ID_producto .'">'. $f->Desc_producto. '</option>';
                    };
                    echo'
                        </select>
                    </div>

                    <div class="control-group">
                        <input type="number" class="logins-field" value="" placeholder="Cantidad" name="Cant_Prod" id="logins-pass" pattern="[0-9]{1-10}">
                        <label class="logins-field-icon fui-lock" for="logins-pass"></label>
                    </div>
                    
                    <div class="control-group">
                        <input type="Date" class="logins-field" value="" id="logins-pass" name="Cant_fecha">
                        <label class="logins-field-icon fui-lock" for="logins-pass"></label>
                    </div>
                    
                    <div class="control-group">
                        <input type="submit" class="btn btn-primary btn-large btn-block" value="Solicitar" id="login-pass">
                    </div>
                </div>
                </form>

            </div>
        </div>
    </body>
</html> ';
?>