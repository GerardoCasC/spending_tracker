<?php 
require_once("../lib/connect.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$query = "UPDATE `usuarios` SET `nombre`='$nombre',`correo`='$correo',`telefono`='$telefono' WHERE id=$id";
$connect -> query($query);

header("Location: index.php")
?>