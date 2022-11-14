<?php
require_once("../lib/connect.php");
session_start();
    if(!isset($_SESSION['user'])){
        echo '<center><h3>Por favor debe iniciar sesión para continuar<br>
        <a href="../index.php">Inicia sesión</a></h3></center>';
        session_destroy();
        die();
    }

$nombre=$_POST['nombre'];

$query = "INSERT INTO gastos_categorias (nombre) VALUES ('$nombre')";
$connect->query($query);

header("Location: index.php")
?>