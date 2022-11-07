<?php
require_once("../lib/connect.php");

$id=$_GET['id'];

$query = "DELETE FROM `gastos` WHERE id=$id";
$connect->query($query);

header("Location: ../index.php")
?>