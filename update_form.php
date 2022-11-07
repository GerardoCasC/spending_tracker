<?php 
require_once("lib/connect.php");
$id=$_GET['id'];
$query_categorias = "SELECT * FROM gastos_categorias";
$result_categorias = $connect->query($query_categorias);
$query_gasto = "SELECT * FROM gastos WHERE id=$id";
$result = $connect->query($query_gasto);
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
                <h1 align="center">Spending tracker <a href="formu_insert.php" class="btn btn-primary">Actualizar</a></h1>
            </div>
        </div>
    </div>
    <form action="insert_query.php" method="POST">
        <h5>Descripción</h5>
        <input type="text" name="descripcion" value="<?php echo'hola';?>">
        <h5>Cantidad</h5>
        <input type="text" name="cantidad" value="Cantidad">
        <h5>Categoría</h5>
        <select name="categoria">
        <?php while ($row = $result_categorias->fetch_assoc()) { ?>
            <option value="<?php echo$row['id'];?>" ><?php echo $row['nombre'];?></option>
        <?php } ?>
        </select>
        <input type="hidden" name="id" value="">
        <button type="submit">Añadir</button>

    </form>
</body>
</html>