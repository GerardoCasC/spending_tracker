<?php 
require_once("../lib/connect.php");
$query_categorias = "SELECT * FROM gastos_categorias";
$result = $connect->query($query_categorias);
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
        <h5>Descripción</h5>
        <input type="text" name="descripcion" placeholder="Descripción">
        <h5>Cantidad</h5>
        <input type="text" name="cantidad" placeholder="Cantidad">
        <h5>Categoría</h5>
        <select name="categoria">
        <?php while ($row = $result->fetch_assoc()) { ?>
            <option value="<?php echo$row['id'];?>" ><?php echo $row['nombre'];?></option>
        <?php } ?>
        </select>
        <button type="submit">Añadir</button>

    </form>
</body>
</html>