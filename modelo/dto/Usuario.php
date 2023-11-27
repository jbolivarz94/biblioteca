<?php
    class Usuario{
        private $id;
        private $usuario;
        private $password;
        private $nombre;

        public function __construct(){
        }

        public function getId(){
            return $this->id;
        }
        
        public function setId($id){
            $this->id = $id;
        }

        public function getUsuario(){  
            return $this->usuario;
        }

        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function getNombre(){
            return $this->nombre;
        }
        
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
    }
?>