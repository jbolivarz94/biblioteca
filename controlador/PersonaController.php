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
            $persona->setTipo($arr["tipo"]);
            return $personaMo->addPersona($persona);
        }

        function getPersona($arr){
            require_once("../modelo/PersonaModel.php");            
            require_once("../modelo/dto/Persona.php");
            $personaMo = new PersonaModel();
            $persona = $personaMo->getPersona($arr["identificacion"]);
            if($persona != null){
                return [$persona->getNombre(),$persona->getIdentificacion(),$persona->getSexo(),$persona->getFecNacimiento(),$persona->getActivo()];
            }else{
                return [];
            }
        }

        function getPersonas($estado){
            require_once("../modelo/PersonaModel.php");
            require_once("../modelo/dto/Persona.php");
            $personaMo = new PersonaModel();
            if($personaMo != null){
                return $personaMo->getPersonas($estado);
            }else{
                return [];
            }
            
        }
    }
?>