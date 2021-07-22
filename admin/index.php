<?php
    if($_POST){
        header('Location:inicio.php');
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login/styles.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css" rel="stylesheet">
    <title>Administrador</title>
</head>

<body>

    <h1>Administrador</h1>
    <h3>Inicio de Sesión</h3>

    <div class="boxForm">
        <form method="POST">
            <label for="fname">Usuario:</label>
            <input type="text" id="user" name="user">

            <label for="lname">Contraseña:</label>
            <div class="boxPwd">
                <input type="password" id="pwd" name="pwd">
                <div class="box"><i class="fas fa-eye" id="checkPwd" onclick="passVisibility()"></i></div>
            </div>

            <input id="submitButton" type="submit" value="Enviar">
        </form>
    </div>
    <script src="../js/admin.js"></script>
</body>

</html>