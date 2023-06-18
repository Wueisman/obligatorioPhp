<?php
require_once("controlador/ControlUsuario.php");
require_once("controlador/ControlLibro.php");
require_once("controlador/ControlPrestamo.php");
require_once("controlador/Sesion.php");
$sesion = new Sesion();
$sesion->setMensaje("");
$usr = new ControlUsuario();
$lib = new ControlLibro();
$prest = new ControlPrestamo();
$post= isset($_POST["accion"]);
$get=isset($_GET["accion"]);
 
if($sesion->iniciada()){
     if($get){
          $accion=$_GET["accion"];
          if($accion=="salir"){
               $sesion->cerrarSesion();
               //$sesion->setMensaje("");
               require_once("vista/login.php");
          }else if($accion=="listar_libros"){
               $lib->listar();
          }else if($accion=="ir_alta_libro"){
               $lib->irAltaLibro($sesion);
          }else if($accion=="menu"){
               if($sesion->esAdmin()) require_once("vista/admin.php");  else require_once("vista/home.php");
          }else if ($accion=="ir_baja_libro"){
               $lib->irBajaLibro($sesion);
          }else if($accion=="ir_prestamo"){
                     $prest->irAltaPrestamo();
          }else if($accion=="ir_devolver"){
                     $prest->irDevolver();
          }elseif($accion == "libros_disponibles"){
               $lib->librosDisponibles();
          }else{
               if($sesion->esAdmin()) require_once("vista/admin.php");  else require_once("vista/home.php");
          }
     }else if($post){
          $accion=$_POST["accion"];
          if($accion=="agregarLibro"){
               $titulo = $_POST["titulo"];
               $autor = $_POST["autor"];
               $id = $_POST["Id"];
              $lib->agregarLibro($id, $autor, $titulo ,$sesion);
          }else if($accion=="eliminarLibro"){
               $id = $_POST["Id"];
               $lib->eliminarLibro($id ,$sesion);
          }else if($accion=="agregarPrestamo"){
               $id = $_POST["Id"];
               $fprestamo = $_POST["fecha_prestamo"];
               $fdevolucion = $_POST["fecha_devolucion"];
               $prest->agregarPrestamo($id, $fprestamo,  $fdevolucion, $sesion);
          }if($accion=="devolverLibro"){
               $id = $_POST["Id"];
               $prest->eliminarPrestamo($id, $sesion);
          }
     }else{
          echo"Error entro sin hacer post ni get <br>";
     }

}else{ // sesion no iniciada
     if ($post){
          $accion = $_POST["accion"];
          if ($accion =="iniciar"){
               $nombre = $_POST["nombre"];
               $pass = $_POST["password"];
               $usr->loguear($nombre, $pass , $sesion);
          } else if($accion =="altausuario"){
               $nombusr = $_POST["usuario"];
               $pass = $_POST["password"];
               $nombre = $_POST["nombre"];
               $apellido = $_POST["apellido"];
               $usr->altaUsuario($nombusr,$pass,$nombre,$apellido,$sesion);
          }
     }else if($get) {
          $accion=$_GET["accion"];
          if($accion="registrarse"){
           $usr->registro();
          } 
          
     }else{
          $sesion->setMensaje("Bienvenido"); 
          require_once("vista/login.php");
     }
}    
    
?>