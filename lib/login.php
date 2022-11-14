<?php 
$correo = $_POST['correo'];
$pass = $_POST['password'];
require_once("connect.php");
$verify = mysqli_query($connect, "SELECT * FROM usuarios WHERE correo='$correo' and password='$pass'");
if(mysqli_num_rows($verify) > 0 ){
session_start();

$_SESSION['user']= $correo;
header("Location:../menu.php");
exit();

} else echo '<center><h3>Correo o contraseña incorrectos <br>
<a href="../index.php">inicia sesion</a></h3></center>';
exit();
?>