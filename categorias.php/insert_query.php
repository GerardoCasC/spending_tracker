<?php
require_once("../lib/connect.php");

$nombre=$_POST['nombre'];

$query = "INSERT INTO gastos_categorias (nombre) VALUES ('$nombre')";
$connect->query($query);

header("Location: index.php")
?>