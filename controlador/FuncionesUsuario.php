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
?>