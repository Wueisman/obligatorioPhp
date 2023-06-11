<?php
require_once("controlador/ControlUsuario.php");
require_once("controlador/Sesion.php");
    //echo "hola index <br>";
    $sesion = new Sesion();
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
    $usr = new ControlUsuario();
    $nombre = $_POST["username"];
    $pass = $_POST["password"];

      if( $usr->exists($nombre)){
          //echo "Existe <br>";
          if( $usr->validar($nombre, $pass) ){
            //echo "Valido <br>";
            
            //$sesion = new Sesion();
            $sesion->setUsuario($nombre);
              if($nombre=="admin"){     //aca habria que hacer if($usr->EsAdmin()) más adelante
                //echo "Es admin <br>";
                require_once("vista/admin.php");
              }else{
                //echo "Es Usuario comun <br>";
                require_once("vista/home.php");
              }
          }else{
            echo "Invalido <br>"; 
          }
      }else{
        echo "No existe <br>";
      }
   }else if(isset( $_SESSION['usuario'] ) ){      //Entra o esta en la pagina con sesion iniciada 
       
        if(isset($_GET["accion"]) and ($_GET["accion"])=="salir"){
          //echo "Get accion = salir <br>";
          $sesion->cerrarSesion();
          require_once("vista/login.php");
        }else{
          require_once("vista/home.php");
        }
    
   }else{ //entra por primera vez
     require_once("vista/login.php");
   }
    
?>