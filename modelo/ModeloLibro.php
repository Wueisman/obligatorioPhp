<?php
//require_once("modelo/Conectar.php");
class ModeloLibro
{
    private $link;
    public function __Construct()
    {
        require_once("modelo/Conectar.php");
        $this->link = Conectar::conexion();
    }

    public function obtenerLibros()
    {
        $sql = "SELECT * FROM libros";
        $resultado = mysqli_query($this->link, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            $libros = array();

            while ($fila = mysqli_fetch_assoc($resultado)) {
                $libros[] = $fila;
            }

            return $libros;
        } else {
            return false;
        }
    }

    public function agregarLibro($id, $titulo, $autor)
    {
        if ($this->exists($id)) {
            $resultado = false;
        } else {
            $sql = "INSERT INTO libros (id, titulo, autor) VALUES ('$id', '$titulo', '$autor')";
            $resultado = mysqli_query($this->link, $sql);
        }

        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function eliminarLibro($id)
    {
        if ($this->exists($id)) {
            $sql = "DELETE FROM libros WHERE id ='$id' ";
            $resultado = mysqli_query($this->link, $sql);

            if ($resultado) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function exists($id)
    {
        $sql = "SELECT COUNT(*) FROM libros WHERE id = '$id'";
        $result = mysqli_query($this->link, $sql);
        $count = mysqli_fetch_array($result)[0];
        return $count > 0;
    }


    public function librosDisponibles()
    {
        $sql = "SELECT * FROM libros WHERE id not IN (SELECT id_libro FROM prestamos)";
        $resultado = mysqli_query($this->link, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            $libros = array();

            while ($fila = mysqli_fetch_assoc($resultado)) {
                $libros[] = $fila;
            }

            return $libros;
        } else {
            return false;
        }
    }


}



?>