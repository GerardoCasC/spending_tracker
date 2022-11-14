<?php 
require_once("lib/connect.php");
    session_start();
    if(!isset($_SESSION['user'])){
        echo '<center><h3>Por favor debe iniciar sesión para continuar<br>
        <a href="index.php">Inicia sesión</a></h3></center>';
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>MENÚ</H1>
    <h3><a href="categorias/index.php">Categorias</a><br></h3>
    <h3><a href="gastos/index.php">Gastos</a><br></h3>
    <h3><a href="usuarios/index.php">Usuarios</a></h3><br><br>
    <h3><a href="lib/logout.php">Cerrar sesión</a></h3>
</body>
</html>