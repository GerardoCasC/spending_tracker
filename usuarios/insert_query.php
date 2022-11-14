<?php
require_once("../lib/connect.php");
session_start();
    if(!isset($_SESSION['user'])){
        echo '<center><h3>Por favor debe iniciar sesión para continuar<br>
        <a href="index.php">Inicia sesión</a></h3></center>';
        session_destroy();
        die();
    }
    
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$password=$_POST['password'];
$telefono=$_POST['telefono'];

$query = "INSERT INTO usuarios (nombre, correo, password, telefono) VALUES ('$nombre', '$correo', '$password', '$telefono')";
$connect->query($query);

header("Location: index.php")
?>