<?php
session_start();

if (isset($_POST["login"])) {

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    require_once("../controlador/UsuarioController.php");
    $usuarioController = new UsuarioController();
    $result = $usuarioController->getUsuario(["usuario" => $usuario, "password" => $password]);
    header("Location: ../vistas/moduloBibliotecario.php");
    exit();
}

if (isset($_POST["tipo_usuario"])) {
    $tipo_usuario = $_POST["tipo_usuario"];
    if ($tipo_usuario == "estudiante") {
        header("Location: ../vistas/moduloEstudiantes.php");
    } elseif ($tipo_usuario == "bibliotecario") {
        header("Location: ../vistas/login.php");
    } 
}

?>