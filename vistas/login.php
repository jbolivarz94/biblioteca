<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        body {
            height: 100%;
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<script type="text/javascript">
    function validar(){
        var xmlhttp;
        var formData = new URLSearchParams(new FormData(document.getElementById("frm_log"))).toString();
        xmlhttp = new XMLHttpRequest();
        xmlhttp.open('POST', '../controlador/FuncionesUsuario.php',true);
        xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var jsonResponse = JSON.parse(xmlhttp.responseText);
                if(Object.keys(jsonResponse).length !== 0){
                    window.location.href='../vistas/moduloBibliotecario.php';
                }else{
                    alert("user doesn't exist");
                    document.getElementById('usuario').focus;
                }
            }
        }        
        xmlhttp.send(formData+"&login=login");
    }

    function validacion(){
        if (document.getElementById('usuario').value == ""){
            alert("Rellene el campo usuario");
            document.getElementById('usuario').focus();
        }else if(document.getElementById('password').value == ""){
            alert("Rellene el campo password");
            document.getElementById('password').focus();
        }else{
            validar();
        }    
    }
</script>
<body class="text-center">
    <main class="form-signin">
        <form id="frm_log">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <div class="form-floating">
                <input type="usuario" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su usuario" required>
                <label id="usuario" for="usuario">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña" required>
                <label id="password "for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="button" onclick="validacion()">login</button>
        </form>
    </main>
</body>
</html>