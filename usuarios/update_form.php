<?php 
require_once("../lib/connect.php");
$id=$_GET['id'];
$query_usuarios = "SELECT * FROM usuarios WHERE id=$id";
$result = $connect->query($query_usuarios);
$result2 = $result->fetch_assoc();
session_start();
    if(!isset($_SESSION['user'])){
        echo '<center><h3>Por favor debe iniciar sesión para continuar<br>
        <a href="index.php">Inicia sesión</a></h3></center>';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
            <a href="../index.php">VOLVER</a>
                <h1 align="center">Spending tracker</h1>
            </div>
        </div>
    </div>
    <form id="form" action="../update_query.php" method="POST">
        <h5>Nombre</h5>
        <input type="text" name="nombre" value="<?php echo $result2['nombre'];?>">
        <h5>Correo</h5>
        <input type="text" name="correo" value="<?php echo $result2['correo'];?>">
        <h5>Telefono</h5>
        <input type="text" name="telefono" value="<?php echo $result2['telefono'];?>"><br><br>
        <select name="status" id="">
        <option value="1">Activo</option>
        <option value="0">Inactivo</option>
        </select>
        <input type="hidden" name="id" value="<?php echo $result2['id'];?>"><br><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>