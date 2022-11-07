<?php
require_once("lib/connect.php");

$categoria=$_POST['categoria'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];

$query = "INSERT INTO gastos (cantidad, categoria, descripcion) VALUES ('$cantidad', '$categoria', '$descripcion')";
$connect->query($query);

header("Location: index.php")
?>