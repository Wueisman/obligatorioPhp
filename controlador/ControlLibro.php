<?php
class ControlLibro
{

  private $mlibro;

  public function __Construct()
  {
    require_once("modelo/ModeloLibro.php");
    $this->mlibro = new ModeloLibro();
    //if(isset($mlibro)) echo "Se seteo mlibro <br>";irAltaLibro()
  }

  public function listar()
  {

    $listaLibros = array();
    if ($this->mlibro->obtenerLibros()) {
      $listaLibros = $this->mlibro->obtenerLibros();
    }

    require_once("vista/lista_libros.php");
  }

  public function irAltaLibro($sesion)
  {
    require_once("vista/alta_libro.php");
  }

  public function irBajaLibro($sesion)
  {
    require_once("vista/baja_libro.php");
  }

  public function agregarLibro($id, $autor, $titulo, $sesion)
  {
    if ($this->mlibro->agregarLibro($id, $titulo, $autor)) {
      $sesion->setMensaje("Libro agregado con exito");
    } else {
      if ($this->mlibro->exists($id)) {
        $sesion->setMensaje("Error: ya existe un libro con ese ID");
      } else {
        $sesion->setMensaje("Error agregando el libro");
      }
    }
    require_once("vista/alta_libro.php");
  }

  public function eliminarLibro($id, $sesion)
  {
    if ($this->mlibro->eliminarLibro($id)) {
      $sesion->setMensaje("Libro eliminado con exito");
    } else {
      if (!$this->mlibro->exists($id)) {
        $sesion->setMensaje("Error: no existe un libro con ese ID");
      } else {
        $sesion->setMensaje("Error eliminando el libro");
      }
    }

    require_once("vista/baja_libro.php");
  }

  public function librosDisponibles()
  {
    $listaLibros = array();
    if ($this->mlibro->librosDisponibles()) {
      $listaLibros = $this->mlibro->librosDisponibles();
    }
    require_once("vista/lista_libros.php");
  }
}

?>