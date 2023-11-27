<?php
    class CategoriaController{
        public function __construct() {
        }

        function addCategoria($arr){
            require_once("../modelo/CategoriaModel.php");
            require_once("../model/dto/Categoria.php");

            $categoria = new Categoria();
            $categoriaMo = new CategoriaModel();

            $categoria -> setNombre($arr["nombre"]);

            return $categoriaMo->addCategorias($categoria);
        }

        function getCategoria($arr){
            require_once("../modelo/CategoriaModel.php");
            $categoriaMo = new CategoriaModel();
            $categorias = $categoriaMo -> getCategorias();
            return $categorias;
        }
    }
?>