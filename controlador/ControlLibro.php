<?php
    class ControlLibro{
        
      private $mlibro; 

        public function __Construct(){
          require_once("modelo/ModeloLibro.php");
          $this->mlibro  = new ModeloLibro();
           //if(isset($mlibro)) echo "Se seteo mlibro <br>";irAltaLibro()
        }

        public function listar(){            
            
            $listaLibros = array();
            if($this->mlibro->obtenerLibros()){ //estaba tirando error cuando devolvia false
              $listaLibros = $this->mlibro->obtenerLibros();
            }
            
            require_once("vista/lista_libros.php");
          }

          public function irAltaLibro($sesion){            
            require_once("vista/alta_libro.php");
          }

          public function irBajaLibro($sesion){            
            require_once("vista/baja_libro.php");
          }

          public function agregarLibro($id, $autor, $titulo, $sesion){
            if($this->mlibro->agregarLibro($id, $titulo, $autor )){
              $sesion->setMensaje("Libro agregado");
            }else{
              $sesion->setMensaje("error agregando el libro");
            }            
            require_once("vista/alta_libro.php");
          }

          public function eliminarLibro($id, $sesion) {
            if ($this->mlibro->eliminarLibro($id)) {
                $sesion->setMensaje("Libro eliminado");
            } else {
                if (!$this->mlibro->exists($id)) {
                    $sesion->setMensaje("No existe un libro con ese ID");
                } else {
                    $sesion->setMensaje("Error eliminando el libro");
                }
            }
        
            require_once("vista/baja_libro.php");
        }
        

          public function librosDisponibles(){            
            $listaLibros = array();
            if ($this->mlibro->librosDisponibles()){
              $listaLibros = $this->mlibro->librosDisponibles();
            }
            require_once("vista/lista_libros.php");
            }
          }

    

?>