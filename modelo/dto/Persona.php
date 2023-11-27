<?php

    class Persona{
        private $identificacion;
        private $nombre;
        private $fec_nacimiento;
        private $sexo;

        private $tipo;
        private $activo;

        public function __construct() {
        }

        public function getIdentificacion() {
            return $this->identificacion;            
        }

        public function setIdentificacion($identificacion) {
            $this->identificacion = $identificacion;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function getFecNacimiento() {
            return $this->fec_nacimiento;
        }

        public function setFecNacimiento($fec_nacimiento) {
            $this->fec_nacimiento = $fec_nacimiento;
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function setSexo($sexo) {
            $this->sexo = $sexo;
        }

        public function getActivo() {
            return $this->activo;
        }

        public function setActivo($activo) {
            $this->activo = $activo;
        }

        public function getTipo() {
            return $this->tipo;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }
    }
?>