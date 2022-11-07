<?php 
require_once("../lib/connect.php");
$query_gastos = "SELECT * FROM gastos";
$result = $connect->query($query_gastos);
?>
<!DOCTYPE html>
<html lang="en">
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
                <h1 align="center">Spending tracker <a href="insert_form.php" class="btn btn-primary">Añadir</a></h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Categoría</th>
                        <th>Fecha de registro</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()) {?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['descripcion']?></td>
                            <td>$<?php echo $row['cantidad']?></td>
                            <td><?php echo $row['categoria']?></td>
                            <td><?php echo $row['fecha']?></td>
                            <td><a href="update_form.php/?id=<?php echo$row['id'];?>">Editar</a></td>
                            <td><a href="delete_query.php/?id=<?php echo$row['id'];?>">Eliminar</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>