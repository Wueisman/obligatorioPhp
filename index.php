<?php
require_once("controlador/ControlUsuario.php");
require_once("controlador/Sesion.php");
    //echo "hola index <br>";
    $sesion = new Sesion();
    $usr = new ControlUsuario();
    /*
   if (  session_status() == PHP_SESSION_ACTIVE){
    echo "Sesion Activa <br>";
   }
   if (isset( $_SESSION['usuario'] ) ){               
    echo "isset session usuario <br>"; 
    
   }*/


   if (isset($_POST["username"] )){
    //echo"Hizo Post<br>";
    //require_once("controlador/ControlUsuario.php");
    //require_once("controlador/Sesion.php");
    //$usr = new ControlUsuario();
    $nombre = $_POST["username"];
    $pass = $_POST["password"];
    $usr->loguear($nombre, $pass , $sesion);

   }else if(isset( $_SESSION['usuario'] ) ){      //Entra o esta en la pagina con sesion iniciada 
       
        if(isset($_GET["accion"]) and ($_GET["accion"])=="salir"){
          //echo "Get accion = salir <br>";
          $sesion->cerrarSesion();
          require_once("vista/login.php");
        }else{
          require_once("vista/home.php");
        }
    
   }else if(isset($_GET["accion"]) and ($_GET["accion"])=="regusr"){ //preiona el link de registrarse 
   // echo "Get accion = regusr <br>";
    $usr->registro();
   }else if (isset($_POST["userreg"] )){ // lleno el form de registro
       echo "Hizo post de registro <br>";//usr 
       $nombusr = $_POST["userreg"];
       $pass = $_POST["passreg"];
       $nombre = $_POST["nombre"];
       $apellido = $_POST["apellido"];
       $usr->altaUsuario($nombusr,$pass,$nombre,$apellido);
   }else{ //entra por primera vez 
    require_once("vista/login.php");
   }
    
?>