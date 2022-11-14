<?php
require_once("../lib/connect.php");
session_start();
    if(!isset($_SESSION['user'])){
        echo '<center><h3>Por favor debe iniciar sesión para continuar<br>
        <a href="index.php">Inicia sesión</a></h3></center>';
        session_destroy();
        die();
    }

$id=$_GET['id'];

$query = "DELETE FROM usuarios WHERE id=$id";
$connect->query($query);

header("Location: ../index.php")
?>