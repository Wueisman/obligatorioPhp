<?php
    //require_once("modelo/Conectar.php");
    class ModeloUsuario{
        private $link;
        private $usuarios;
        public function __Construct(){
            require_once("modelo/Conectar.php");
            $this->link = Conectar::conexion();
            $this->usuarios = array();
        }

        public function exists($usuario){
            $existe = false;
            $res =  $this->getUsuarios();
            while($fila = mysqli_fetch_row( $res)){            //recorre la tabla
                 if($fila[0]==="$usuario"){
                    $existe = true;
                 }
            }           
            return $existe;
        }

        public function getUsuarios(){
            $sql = "SELECT * FROM usuarios";
            return mysqli_query($this->link,$sql);   
        }

        public function validar($nombre, $pass){
            $valido = false;
            $res =  $this->getUsuarios();
            while($fila = mysqli_fetch_row( $res)){            
                 if( ($fila[0]==="$nombre") and ($fila[1]==="$pass" ) ){
                    $valido = true;
                 }
            }           
            return $valido;
        }

        public function altaUsuario($nombusr,$pass,$nombre,$apellido){
            $sql = "INSERT INTO usuarios (usuario,contrasenia,nombre,apellido) VALUES ('$nombusr','$pass','$nombre','$apellido')";
            mysqli_query($this->link,$sql);
        }
    }



?>