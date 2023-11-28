<?php

class PersonaModel
{
    private $db;
    private $personas;

    public function __construct()
    {
        require_once("dto/Conectar.php");
        $this->db = conectar::conexion();
        $this->personas = array();
    }

    public function addPersona($persona)
    {
        $dni = $persona->getIdentificacion();
        $nombre = $persona->getNombre();
        $fec_nacimiento = $persona->getFecNacimiento();
        $sexo = $persona->getSexo();
        $activo = $persona->getActivo();
        $tipo = $persona->getTipo();
        if ($this->db->query("INSERT INTO persona(identificacion, nombre, fec_nacimiento, sexo, activo, tipo) VALUES ('$dni','$nombre','$fec_nacimiento','$sexo','$activo','$tipo')")) {
            return true;
        } else {
            return false;
        }
    }

    public function updatePersonas($persona)
    {
        $dni = $persona->getIdentificacion();
        $nombre = $persona->getNombre();
        $fec_nacimiento = $persona->getFecNacimiento();
        $sexo = $persona->getSexo();
        $activo = $persona->getActivo();
        if ($this->db->query("UPDATE persona SET nombre='$nombre',fec_nacimiento='$fec_nacimiento',sexo='$sexo',activo='$activo' WHERE identificacion = '$dni'")) {
            return true;
        } else {
            return false;
        }
    }

    public function getPersona($dni)
    {
        $consulta = $this->db->query("SELECT * FROM persona WHERE identificacion = '$dni'");
        if ($consulta->rowCount() > 0) {
            while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $persona = new Persona();
                $persona->setIdentificacion($row["identificacion"]);
                $persona->setNombre($row["nombre"]);
                $persona->setFecNacimiento($row["fec_nacimiento"]);
                $persona->setActivo($row["activo"]);
                $persona->setSexo($row["sexo"]);
                $persona->setTipo($row["tipo"]);
            }
            return $persona;
        } else {
            return null;
        }
    }

    public function getPersonas($estado)
    {
        $consulta = $this->db->query("SELECT * FROM persona WHERE activo = '$estado'");
        if ($consulta->rowCount() > 0) {
            while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $persona = new Persona();
                $persona->setIdentificacion($row["identificacion"]);
                $persona->setNombre($row["nombre"]);
                $persona->setFecNacimiento($row["fec_nacimiento"]);
                $persona->setSexo($row["sexo"]);
                $persona->setActivo($row["activo"]);
                $persona->setTipo($row["tipo"]);
                $personas[] = $persona;
            }
            return $personas;
        } else {
            return null;
        }
    }
}
?>