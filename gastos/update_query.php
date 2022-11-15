<?php 
require_once("../lib/connect.php");

$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];

$query = "UPDATE `gastos` SET `cantidad`='$cantidad',`categoria`='$categoria',`descripcion`='$descripcion' WHERE id=$id";
$connect -> query($query);

header("Location: index.php")
?>