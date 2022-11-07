<?php
require_once("../lib/connect.php");

$id=$_GET['id'];

$query = "DELETE FROM `gastos_categorias` WHERE id=$id";
$connect->query($query);

header("Location: ../index.php")
?>