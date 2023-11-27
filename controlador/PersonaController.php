<?php
    class PersonaController{

        public function __construct() {
        }

        function addPersona($arr){
            require_once("../modelo/PersonaModel.php");
            require_once("../modelo/dto/Persona.php");

            $persona = new Persona();
            $personaMo = new PersonaModel();

            $persona->setIdentificacion($arr["identificacion"]);
            $persona->setNombre($arr["nombre"]);
            $persona->setFecNacimiento($arr["fec_nacimiento"]);
            $persona->setSexo($arr["sexo"]);
            $persona->setActivo("INACTIVO");
            return $personaMo->addPersona($persona);
        }

        function getPersona($arr){
            require_once("../modelo/PersonaModel.php");
            $personaMo = new PersonaModel();
            $persona = $personaMo->getPersona($arr["identificacion"]);
            return [$persona->getNombre(),$persona->getIdentificacion(),$persona->getSexo(),$persona->getFecNacimiento(),$persona->getActivo()];
        }

        function getPersonas(){
            require_once("../modelo/PersonaModel.php");
            $personaMo = new PersonaModel();
            $persona = $personaMo->getPersonas();
            return [$persona->getNombre(),$persona->getIdentificacion(),$persona->getSexo(),$persona->getFecNacimiento(),$persona->getActivo()];
        }
    }
?>