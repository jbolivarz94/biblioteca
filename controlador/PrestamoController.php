<?php
    class PrestamoController{
        public function __construct(){
        }

        function getPrestamos($arr){
            require_once("../model/PrestamoModel.php");
            $prestamoMo = new PrestamoModel();
            $prestamos = $prestamoMo->getPrestamos($arr["dni"]);
            return $prestamos;
        }

        function addPrestamo($arr){
            require_once("../model/PrestamoModel.php");
            require_once("../model/dto/Prestamo.php");
            $prestamoMo = new PrestamoModel();
            $prestamo = new Prestamo();

            $prestamo->setDniPersona($arr["dni_persona"]);
            $prestamo->setIsbn($arr["isbn"]);
            $prestamo->setEjemplar($arr["ejemplar"]);
            $prestamo->setfecPrestamo($arr["fec_prestamo"]);
            
            return $prestamoMo -> addPrestamo($prestamo);
        }
    }
?>