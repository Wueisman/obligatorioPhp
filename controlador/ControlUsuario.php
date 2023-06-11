<?php
    class ControlUsuario{
        
      private $musr; //apunta al modeloUsuario

        public function __Construct(){
          require_once("modelo/ModeloUsuario.php");
          $this->musr  = new ModeloUsuario();
        }
        public function loguear($nombre, $pass , $sesion){            
          if( $this->musr->exists($nombre)){
            //echo "Existe <br>";
            if( $this->musr->validar($nombre, $pass) ){
              //echo "Valido <br>";
              
              //$sesion = new Sesion();
              $sesion->setUsuario($nombre);
                if($nombre=="admin"){     //aca habria que hacer if($musr->EsAdmin()) más adelante
                  //echo "Es admin <br>";
                  require_once("vista/admin.php");
                }else{
                  //echo "Es Usuario comun <br>";
                  require_once("vista/home.php");
                }
            }else{
              echo "Invalido <br>"; 
            }
          }else{
            echo "No existe <br>";
          }
        }
        public function exists($usuario){            
          //$musr = new ModeloUsuario();
          return $this->musr->exists($usuario);
        }
        
        public function validar($nombre, $pass){
          return $this->musr->validar($nombre, $pass);
        }

        public function registro(){            
          require_once("vista/registro.php");
        }
        public function altaUsuario($nombusr,$pass,$nombre,$apellido){
          if( ! $this->musr->exists($nombusr) ){
              //echo "Alta OK <br>";
              $this->musr->altaUsuario($nombusr,$pass,$nombre,$apellido);
              $exitoAlta = true;
              require_once("vista/login.php");
          }else{
              $exitoAlta = false;
              require_once("vista/login.php");
              //echo "Error alta ya existe <br>";
            
          }            
          
        }
    }

?>