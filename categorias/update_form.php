<?php 
require_once("../lib/connect.php");
session_start();
    if(!isset($_SESSION['user'])){
        echo '<center><h3>Por favor debe iniciar sesión para continuar<br>
        <a href="../index.php">Inicia sesión</a></h3></center>';
        session_destroy();
        die();
    }
$id=$_GET['id'];
$query_gastos = "SELECT * FROM gastos_categorias WHERE id=$id";
$result = $connect->query($query_gastos);
$result2 = $result->fetch_assoc();
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
                <h1 align="center">Spending tracker</h1>
            </div>
        </div>
    </div>
    <form action="insert_query.php" method="POST">
        <h5>Nombre de la categoría</h5>
        <input type="text" name="nombre" value="<?php echo $result2['nombre'];?>">
        <input type="hidden" name="id" value="<?php echo $result2['id'];?>">
        <button type="submit">Añadir</button>
    </form>
</body>
</html>