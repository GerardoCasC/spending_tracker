<?php 
require_once("../lib/connect.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];

$query = "UPDATE `gastos_categorias` SET `nombre`='$nombre' WHERE id=$id";
$connect -> query($query);

header("Location: index.php")
?>