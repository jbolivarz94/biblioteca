<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Usuarios</h1>
        <div class="row">
            <div class="col-6">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button class="btn btn-primary" onclick="window.location.href='registro.php';">Nueva Usuario</button>
                </div>
            </div>
            <div class="col-6">
            </div>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Identificacion</th>
                        <th>Nombre</th>
                        <th>Fecha De Nacimiento</th>
                        <th>Sexo</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($usuarios) && is_array($usuarios)) : ?>
                        <?php foreach ($usuarios as $usuario) : ?>
                            <tr>
                                <td><?php echo $usuario['id'] ?></td>
                                <td><?php echo $usuario['nombre'] ?></td>
                                <td><?php echo $usuario['fecha_nacimiento'] ?></td>
                                <td><?php echo $usuario['sexo'] ?></td>
                                <td>
                                    <form method="post" action="">
                                        <input type="hidden" name="key" value="<?php echo $usuario['id'] ?>">
                                        <input type="submit" name="eliminar" value="Eliminar">
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="5">No hay usuarios para mostrar.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
