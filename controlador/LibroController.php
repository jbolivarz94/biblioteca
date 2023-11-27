<?php
    class LibroController{
        public function __construct(){
        }

        function getLibros($arr){
            require_once("../model/LibroModel.php");
            
            $libroMo = new LibroModel();

            $libros = $libroMo->getLibros();

            return $libros;
        }

        function getLibro($arr){
            require_once("../model/LibroModel.php");
            require_once("../model/Libro.php");            
            $libroMo = new LibroModel();
            $libro = new Libro();
            $libro = $libroMo->getLibro($arr["isbn"]);
            return $libro;
        }

        function addLibro($arr){
            require_once("../model/LibroModel.php");
            require_once("../model/Libro.php");
            $libroMo = new LibroModel();
            $libro = new Libro();

            $libro->setIsbn($arr["isbn"]);
            $libro->setEjemplar($arr["ejemplar"]);
            $libro->setNombre($arr["nombre"]);
            $libro->setCod_categoria($arr["cod_categoria"]);
            $libro->setNum_paginas($arr["num_paginas"]);

            return $libroMo->addLibro($libro);
        }
    }
?>