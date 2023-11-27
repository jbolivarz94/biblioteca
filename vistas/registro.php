<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro De Usuarios</title>
</head>

<body>
    <h1>Formulario de Registro</h1>
    <form action="../controlador/FuncionesUsuario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="identificacion">Identificacion:</label>
        <input type="text" id="identificacion" name="identificacion" required>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo">
            <option value="selecciona" disabled selected>Selecciona tu sexo</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>

        <label for="fec_nacimiento">Fecha Nacimiento:</label>
        <input type="date" id="fechaNacimiento" name="fec_nacimiento" required>

        <input type="submit" value="Registrarse" name="registrar">
    </form>
</body>
</html>