<?php
    class PrestamoModel{

        private $db;
        private $prestamos;

        public function __construct(){
            require_once("dto/Conectar.php");
            $this-> db=conectar::conexion();
            $this->prestamos=array();
        }

        public function getPrestamos($dni_persona){
            $consulta=$this->db->query("SELECT * FROM prestamo WHERE dni_persona = '$dni_persona'");
            if($row= $consulta->fetch(PDO::FETCH_ASSOC)){
                $prestamo = new Prestamo();
                $prestamo->setDniPersona($row["dni_persona"]);
                $prestamo->setId( $row["id"] );
                $prestamo->setIsbn($row["isbn"]);
                $prestamo->setEjemplar($row["ejemplzar"]);
                $prestamo->setfecPrestamo($row["fec_prestamo"]);
                $prestamo->setfecDevolucion($row["fec_devolucion"]);
                $prestamos[]=$prestamo;
            }
            return $prestamos;
        }

        public function getPrestamo($id){
            $consulta=$this->db->query("SELECT * FROM prestamo WHERE id = '$id'");
            if($row= $consulta->fetch(PDO::FETCH_ASSOC)){
                $prestamo = new Prestamo();
                $prestamo->setDniPersona($row["dni_persona"]);
                $prestamo->setId( $row["id"] );
                $prestamo->setIsbn($row["isbn"]);
                $prestamo->setEjemplar($row["ejemplar"]);
                $prestamo->setfecPrestamo($row["fec_prestamo"]);
                $prestamo->setfecDevolucion($row["fec_devolucion"]);
            }
            return $prestamo;
        }

        public function addPrestamo($prestamo){
            $dniPersona = $prestamo->getDniPersona();
            $isbn = $prestamo->getIsbn();
            $ejemplar = $prestamo->getEjemplar();
            $fecPrestamo = $prestamo->getfecPrestamo();
            if($this->db->query("INSERT INTO prestamo(dni_persona, isbn, ejemplar, fec_prestamo) VALUES ('$dniPersona','$isbn','$ejemplar','$fecPrestamo')")){
                return true;
            }else{
                return false;
            }
        }
    }
?>