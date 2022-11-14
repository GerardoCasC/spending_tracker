<?php 
require_once("../lib/connect.php");
session_start();
    if(!isset($_SESSION['user'])){
        echo '<center><h3>Por favor debe iniciar sesión para continuar<br>
        <a href="index.php">Inicia sesión</a></h3></center>';
        session_destroy();
        die();
    }
$query_usuarios = "SELECT * FROM usuarios";
$result = $connect->query($query_usuarios);
?>
<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 align="center">Spending tracker</h1>
            </div>
        </div>
    </div>
    <form action="insert_query.php" method="POST">
        <h5>Nombre</h5>
        <input type="text" name="nombre" placeholder="Nombre">
        <h5>Correo</h5>
        <input type="text" name="correo" placeholder="Correo">
        <h5>Telefono</h5>
        <input type="text" name="telefono" placeholder="Telefono">
        <h5>Contraseña</h5>
        <input type="text" name="password" placeholder="Contraseña">
        <button type="submit">Añadir</button>
    </form>
</body>
</html>