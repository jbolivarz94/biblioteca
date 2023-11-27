<?php

    class UsuarioModel{

        private $db;
        private $usuarios;

        public function __construct(){
            require_once("dto/Conectar.php");
            $this-> db=conectar::conexion();
            $this->usuarios=array();
        }

        public function getUsuario($usuario, $password){
            $consulta=$this->db->query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND password='$password'");
            if($fila= $consulta->fetch(PDO::FETCH_ASSOC)){
                $usuario = new Usuario();
                $usuario-> setUsuario($fila["usuario"]);
                $usuario->setPassword($fila["password"]);
                $usuario->setNombre($fila["nombre"]);
                $usuario->setId($fila["id"]);
            }
            return $usuario;
        }
    }
?>