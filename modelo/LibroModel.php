<?php
    class LibroModel{
        private $db;
        private $libros;

        public function __construct(){
            require_once("dto/Conectar.php");
            $this-> db=conectar::conexion();
            $this->libros=array();
        }

        public function getLibros(){
            $consulta = $this->db->query("SELECT * FROM libro");
            if($row= $consulta->fetch(PDO::FETCH_ASSOC)){
                $libro = new Libro();
                $libro->setIsbn($row["isbn"]);
                $libro->setEjemplar($row["ejemplar"]);
                $libro->setNombre($row["nombre"]);
                $libro->setCod_categoria($row["cod_categoria"]);
                $libro->setNum_paginas($row["num_paginas"]);
                $libros[]=$libro;
            }
            return $libros;
        }

        public function addLibro($libro){
            $isbn = $libro->getIsbn();
            $ejemplar = $libro->getEjemplar();
            $nombre = $libro->getNombre();
            $cod_categoria = $libro->getCod_categoria();
            $num_paginas = $libro->getNum_paginas();
            if($this->db->query("INSERT INTO `libro`(`isbn`, `ejemplar`, `nombre`, `cod_categoria`, `num_paginas`) VALUES ('$isbn','$ejemplar','$nombre','$cod_categoria','$num_paginas')")){
                return true;
            }else{
                return false;
            }
        }

        public function getLibro($isbn){
            $consulta = $this->db->query("SELECT * FROM libro WHERE isbn = '$isbn'");
            if($row= $consulta->fetch(PDO::FETCH_ASSOC)){
                $libro = new Libro();
                $libro->setIsbn($row["isbn"]);
                $libro->setEjemplar($row["ejemplar"]);
                $libro->setNum_paginas($row["num_paginas"]);
                $libro->setCod_categoria($row["cod_categoria"]);
                $libro->setNombre($row["nombre"]);                
            }
            return $libro;
        }

        public function getLibropag($num_paginas){
            $consulta = $this->db->query("SELECT * FROM libro WHERE num_paginas<= '$num_paginas'");
            if($row= $consulta->fetch(PDO::FETCH_ASSOC)){
                $libro = new Libro();
                $libro->setIsbn($row["isbn"]);
                $libro->setEjemplar($row["ejemplar"]);
                $libro->setNum_paginas($row["num_paginas"]);
                $libro->setCod_categoria($row["cod_categoria"]);
                $libro->setNombre($row["nombre"]);   
            }
            return $libro;
        }
    }
?>