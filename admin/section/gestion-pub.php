<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/admin/styles.css">
    <link rel="stylesheet" href="../../css/admin/gestion-pub/styles.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <title>Administrador</title>
</head>

<?php include("../template/header.php") ?>
<div class="boxContent">
    <div class="boxForm">
        <form method="POST">
            <label for="fname">Portafolio:</label>
            <select name="portfolio">
                <option value="1">Opción 1</option>
                <option value="2">Opción 2</option>
                <option value="3">Opción 3</option>
            </select>

            <div class="boxInputs">
                <label for="lname">Espacio hasta:</label>
                <input type="date" id="datePub" name="datePub">
            </div>

            <input id="saveButton" type="submit" value="Guardar">
        </form>
    </div>
    <div class="preview">
        Preview
    </div>
</div>
<?php include("../template/footer.php") ?>