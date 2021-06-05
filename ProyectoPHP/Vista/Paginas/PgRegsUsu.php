<!DOCTYPE html>

<!DOCTYPE html>
<?php
require_once ('Controler/ControlerRegsUsu.php');
$guardar = NULL;
if (isset($_POST['Usu_desk'])) {
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
                echo '
                <div class="app-title">
                    <h1>Registro de usuarios</h1>
                </div>
                <form method="post" name="formulario" onsubmit="GuardarInfo()">
                    <div class="logins-form">
                        <div class="control-group">
                            <input type="text" class="logins-field" value="" placeholder="Usuario" id="login-name" name="Usu_desk">
                        </div>

                        <div class="control-group">
                            <input type="password" class="logins-field" value="" placeholder="Contraseña" id="login-pass" name="Usu_pass">
                        </div>

                        <input type="submit" class="btn btn-primary btn-large btn-block" value="Registrar" >
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>';

?>
