<?php
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

if (isset($_POST["listarUsuarios"])) 
{
    require_once("../controlador/PersonaController.php");
    $usuariosArray = array();
    $personaController = new PersonaController();
    $result = $personaController->getPersonas();

    for ($i = 0; $i < count($result); $i++) {
        $usuario = array(
            'tipo' => $result[$i]->getTipo(),
            'identificacion' => $result[$i]->getIdentificacion(),
            'nombre' => $result[$i]->getNombre(),
            'fecha_nacimiento' => $result[$i]->getFecNacimiento(),
            'sexo' => $result[$i]->getSexo(),   
            'activo' => $result[$i]->getActivo()       
        );
        $usuariosArray[] = $usuario;
    } 
    echo json_encode($usuariosArray);
}

if (isset($_POST["registrar"])) {
    require_once("../controlador/PersonaController.php");
    $personaController = new PersonaController();
    $personaController->addPersona($_POST);
    header("Location: ../vistas/moduloBibliotecario.php");
}

?>