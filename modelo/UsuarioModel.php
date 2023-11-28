<?php
    class UsuarioModel {

        private $db;
        private $usuarios;

        public function __construct(){
            require_once("dto/Conectar.php");
            $this->db=conectar::conexion();
            $this->usuarios=array();
        }

        public function getUsuario($usuario, $password){
            require_once("../modelo/dto/Usuario.php");
            $consulta=$this->db->query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$password'");
            if ($consulta->rowCount() > 0) {
                while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $usuario = new Usuario();
                $usuario->setUsuario($row["usuario"]);
                $usuario->setPassword($row["password"]);
                $usuario->setNombre($row["nombre"]);
                $usuario->setId($row["id"]);
                }
                return $usuario;
            }else{
                return null;
            }
        }
    }
?>