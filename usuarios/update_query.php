<?php 
require_once("../lib/connect.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$status = $_POST['status'];

$query = "UPDATE `usuarios` SET `nombre`='$nombre',`correo`='$correo',`telefono`='$telefono',`status`='$status' WHERE id=$id";
$connect -> query($query);

header("Location: index.php")
?>