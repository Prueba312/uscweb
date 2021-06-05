<?php
require_once ("Controler/ControlerLog.php");
session_start();

//if ($_SESSION['usuario']!=null || $_SESSION['usuario']!='') {
//    $salir = salir();
//}
if (isset($_POST["User_desk"])) {
    $validacion = Validar();   
}

$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'PgMenu';

require_once 'Vista/Paginas/Header.php';

// este codigo se debe poner en cada archivo que no queremoes que el usuario lo vea
    
    error_reporting(0);         // no muestra el error de sesion
    if ($_REQUEST['Cerrar'] == 'Cerrar sesion') {
          $salir = Salir();
    }
    
    $varsesion=$_SESSION['usuario'];
    
    
    
    if($varsesion == null || $varsesion =''){
        echo '<div class="topnav">
            <div class="login-container">
              <form method="post" name="formulario" onsubmit="Validar()">
                    <a class="$pagina =="PgRegsUsu" ? "active" : ""; " href="?p=PgRegsUsu">Registrar</a>
                    <input type="text" placeholder="Username" name="User_desk" class="Login">
                    <input type="Password" placeholder="Password" name="psw" class="Login">
                    <input type="submit" class="btn btn-primary btn-large btn-block" value="login" >
              </form>
            </div>
        </div>';
        if($pagina =='pgregsusu')
        {
            require_once 'Vista/Paginas/' . $pagina .'.php';
            require_once 'Vista/Paginas/Foother.php';
        }
        else 
        {
            require_once 'Vista/Paginas/Pgloguear.php';
            require_once 'Vista/Paginas/Foother.php';
        }
        
        die();        
    }
    else
    {
        echo'<div class="topnav">
            <div class="login-container">
              <form method="post" name="formulario" onsubmit="Salir()">
                    <labael">Usuario:'.$_SESSION['usuario'].'</a>
                    <input name="Cerrar" type="submit" class="btn btn-primary btn-large btn-block" value="Cerrar sesion" >
              </form>
            </div>
        </div>';
    }
    
require_once 'Vista/Paginas/' . $pagina .'.php';

require_once 'Vista/Paginas/Foother.php';

?>