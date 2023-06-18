<?php 
    class ModeloPrestamo{
        private $link;
        public function __Construct(){
            require_once("modelo/Conectar.php");
            $this->link = Conectar::conexion();
        }

        public function obtenerPrestamos() {
            $sql = "SELECT * FROM prestamos";
            $resultado = mysqli_query($this->link, $sql);
            
            if (mysqli_num_rows($resultado) > 0) {
                $prestamos = array();
                
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    $prestamos[] = $fila;
                }
                
                return $prestamos;
            } else {
                return false;
            }
        }
        public function agregarPrestamo($id, $fprestamo,  $fdevolucion, $usuario) {
            if ($this->exists($id)){
                $resultado=false;
            }else{
                $sql = "INSERT INTO prestamos (id_libro, nombre_usuario, fecha_prestamo, fecha_devolucion ) VALUES ('$id', '$usuario', '$fprestamo','$fdevolucion')"; 
                $resultado = mysqli_query($this->link, $sql);
            }
            
            if ($resultado) {
                return true;
            } else {
                return false;
            }
        }

        public function eliminarPrestamo($id, $sesion){

            if ($this->exists($id)){
                $sql = "DELETE FROM prestamos WHERE id_libro ='$id' ";
                $resultado = mysqli_query($this->link, $sql);
            }else{
                $resultado=false;
            }
            
            if ($resultado) {
                return true;
            } else {
                return false;
            }
        }

        public function exists($Id){
            $existe = false;
            $res =  $this->obtenerPrestamos();
            if($res){
                foreach ($res as $value) {
                    if($value["id_libro"]==="$Id"){
                        $existe = true;
                     }
                  } 
            }
         
            return $existe;
        }

    }




?>