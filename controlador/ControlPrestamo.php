<?php
class ControlPrestamo
{

  private $mprestamo;

  public function __Construct()
  {
    require_once("modelo/ModeloPrestamo.php");
    $this->mprestamo = new ModeloPrestamo();
  }
  public function irAltaPrestamo()
  {
    require_once("vista/alta_prestamo.php");
  }
  //irDevolver();
  public function irDevolver()
  {
    require_once("vista/devolver.php");
  }

  public function agregarPrestamo($id, $fprestamo, $fdevolucion, $sesion)
  {
    $usuario = $sesion->getUsuario();

    // Verificar si existe un libro con el ID proporcionado
    if ($this->mprestamo->existeLibro($id)) {
      // Verificar si el libro está disponible para préstamo
      if ($this->mprestamo->libroDisponible($id)) {
        $resultado = $this->mprestamo->agregarPrestamo($id, $fprestamo, $fdevolucion, $usuario);
        if ($resultado) {
          $sesion->setMensaje("Préstamo agregado");
        } else {
          if (strtotime($fprestamo) > strtotime($fdevolucion)) {
            $sesion->setMensaje("La fecha de préstamo debe ser anterior a la fecha de devolución");
          } else {
            $sesion->setMensaje("Error agregando el préstamo");
          }
        }
      } else {
        $sesion->setMensaje("El libro no está disponible para préstamo");
      }
    } else {
      $sesion->setMensaje("No existe un libro con ese ID");
    }

    require_once("vista/alta_prestamo.php");
  }






  public function eliminarPrestamo($id, $sesion)
  {
    $usuario = $sesion->getUsuario();
    if ($this->mprestamo->existeLibro($id)) {
      if ($this->mprestamo->exists($id)) {
        $resultado = $this->mprestamo->eliminarPrestamo($id, $sesion);
        if ($resultado) {
          $sesion->setMensaje("Prestamo devuelto");
        } else {
          $sesion->setMensaje("Error devolviendo el prestamo");
        }
      } else {
        $sesion->setMensaje("Error en devolucion: El libro ya se encuentra disponible");
      }
    } else {
      $sesion->setMensaje("No existe un libro con ese ID");
    }

    require_once("vista/devolver.php");
  }

}

?>