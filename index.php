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
    <h1>Spending tracker</h1>
    <h2>Inicia sesión</h2>
    <form action="lib/login.php" method="POST" autocomplete="off">
        <h3>Correo electrónico:</h3>
    <input type="text" placeholder="Correo electrónico" name="correo" required>
        <h3>Contraseña:</h3>
    <input type="text" placeholder="Contraseña" name="password" required><br><br>
    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    </form>
</body>
</html>