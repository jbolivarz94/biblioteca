<?php

    class Libro{
        private $isbn;
        private $ejemplar;
        private $nombre;
        private $num_paginas;

        private $cod_categoria;

        public function __construct(){
        }
        
        public function getIsbn(){
            return $this->isbn;
        }

        public function setIsbn($isbn){
            $this->isbn = $isbn;
        }

        public function getEjemplar(){
            return $this->ejemplar;
        }

        public function setEjemplar($ejemplar){
            $this->ejemplar = $ejemplar;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }        

        public function setNum_paginas($num_paginas){
            $this->num_paginas = $num_paginas;
        }

        public function getNum_paginas(){
            return $this->num_paginas;
        }
        
        public function setCod_categoria($cod_categoria){
            $this->cod_categoria = $cod_categoria;
        }

        public function getCod_categoria(){
            return $this->cod_categoria;
        }

    }

?>