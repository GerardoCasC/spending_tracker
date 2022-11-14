<?php
require_once("../lib/connect.php");
session_start();
    if(!isset($_SESSION['user'])){
        echo '<center><h3>Por favor debe iniciar sesión para continuar<br>
        <a href="../index.php">Inicia sesión</a></h3></center>';
        session_destroy();
        die();
    }

$categoria=$_POST['categoria'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];

$query = "INSERT INTO gastos (cantidad, categoria, descripcion) VALUES ('$cantidad', '$categoria', '$descripcion')";
$connect->query($query);

header("Location: index.php")
?>