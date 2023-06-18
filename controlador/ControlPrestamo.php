<?php
    class ControlPrestamo{
        
      private $mprestamo; 

        public function __Construct(){
          require_once("modelo/ModeloPrestamo.php");
          $this->mprestamo  = new ModeloPrestamo();
        }
        public function irAltaPrestamo(){            
            require_once("vista/alta_prestamo.php");
        }
        //irDevolver();
        public function irDevolver(){            
            require_once("vista/devolver.php");
        }
        public function agregarPrestamo($id, $fprestamo,  $fdevolucion, $sesion){
            $usuario = $sesion->getUsuario();
           $resultado = $this->mprestamo->agregarPrestamo($id, $fprestamo,  $fdevolucion, $usuario);
           if($resultado){
            $sesion->setMensaje("Prestamo agregado");
          }else{
            $sesion->setMensaje("error agregando el prestamo");
          }
            require_once("vista/alta_prestamo.php");
        }

        public function eliminarPrestamo($id, $sesion){
            $usuario = $sesion->getUsuario();
           $resultado = $this->mprestamo->eliminarPrestamo($id, $sesion);
           if($resultado){
            $sesion->setMensaje("Prestamo eliminado");
          }else{
            $sesion->setMensaje("error eliminando el prestamo");
          }

          require_once("vista/devolver.php");
        }

    }

?>