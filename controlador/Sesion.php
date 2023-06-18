<?php
    class Sesion{
        public function __Construct(){
            session_start();
          }
          public function setUsuario($user){
            $_SESSION['usuario'] = $user;
          }

          public function getUsuario(){
            return $_SESSION['usuario'] ;
          }
          
          public function setMensaje($mensaje){
            $_SESSION['mensaje'] = $mensaje;

          }
          public function getMensaje(){
            return $_SESSION['mensaje'] ;
          }

          public function cerrarSesion(){
            session_unset();
            session_destroy();
            $iniciada = false;
          }

          public function iniciada(){
            return isset($_SESSION['usuario']);
          }

          public function esAdmin(){
            return isset($_SESSION['usuario']) and $_SESSION['usuario'] == "admin" ;
          }
    }

?>