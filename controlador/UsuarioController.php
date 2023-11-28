<?php
    class UsuarioController{
        public function __construct() {   

        }

        function getUsuario($arr){
            require_once("../modelo/UsuarioModel.php");
            require_once("../modelo/dto/Usuario.php");
            $usuarioMo = new UsuarioModel();
            $usuario = $usuarioMo->getUsuario($arr["usuario"],$arr["password"]);
            if ($usuario != null) {
                return [$usuario->getNombre(), $usuario->getUsuario()];
            }else {
                [];
            }
        }
    }
?>