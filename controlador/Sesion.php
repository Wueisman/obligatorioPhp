<?php
    class Sesion{
        public function __Construct(){
            session_start();
           // echo "Session start <br>";
          }
          public function setUsuario($user){
            $_SESSION['usuario'] = $user;

          }
          public function getUsuario(){
            return $_SESSION['usuario'] ;
          }

          public function cerrarSesion(){
            session_unset();
            session_destroy();
          }
    }

?>