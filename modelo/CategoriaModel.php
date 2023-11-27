<?php
    class CategoriaModel{
        private $db;
        private $categorias;

        public function __construct() {
            require_once("dto/Conectar.php");
            $this-> db=conectar::conexion();
            $this->categorias=array();
        }

        public function getCategorias() {
            $consulta = $this->db->query("SELECT * FROM categoria");
            if($row=$consulta->fetch(PDO::FETCH_ASSOC)) {
                $categoria = new Categoria();
                $categoria->setId($row["id"]);
                $categoria->setNombre($row["nombre"]);
                $categorias[] = $categoria;
            }
            return $categorias;
        }

        public function addCategorias($categoria) {
            $nombre=$categoria->getNombre();
            if($this->db->query("INSERT INTO categoria(nombre) VALUES ('$nombre')")) {
                return true;
            }else{
                return false;
            }

        }
    }
?>