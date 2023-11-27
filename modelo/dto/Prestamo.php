<?php

    class Prestamo{
        private $id;
        private $dni_persona;
        private $isbn;
        private $ejemplar;
        private $fec_prestamo;

        private $fec_devolucion;

        public function __construct(){
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getDniPersona(){
            return $this->dni_persona;
        }

        public function setDniPersona($dni_persona){
            $this->dni_persona = $dni_persona;
        }

        public function getEjemplar(){
            return $this->ejemplar;
        }

        public function setEjemplar($ejemplar){
            $this->ejemplar = $ejemplar;
        }

        public function getfecDevolucion(){
            return $this->fec_devolucion;
        }

        public function setfecDevolucion($fecDevolucion){
            $this->fec_devolucion = $fecDevolucion;
        }

        public function getfecPrestamo(){
            return $this->fec_prestamo;
        }

        public function setfecPrestamo($fec_prestamo){
            $this->fec_prestamo = $fec_prestamo;
        }

        public function getIsbn(){
            return $this->isbn;
        }

        public function setIsbn($isbn){
            $this->isbn = $isbn;
        }
    }
?>