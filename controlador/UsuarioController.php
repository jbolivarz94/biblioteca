<?php
    class UsuarioController{
        public function __construct() {            
        }

        function getUsuario($arr){
            require_once("../modelo/UsuarioModel.php");
            $usuarioMo = new UsuarioModel();
            $usuario = $usuarioMo->getUsuario($arr["usuario"],$arr["password"],);
            return [$usuario->getNombre(), $usuario->getUsuario()];
        }
    }
?>