<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    
    <title>Document</title>
</head>

<body class="login">
    <div class="form">
        <p>Inicio de <strong>Sesión</strong></p>
        <form action="controller/login.php" method="POST">
            <input class="inputL" type="text" name="usuario" placeholder="Ingresa tu usuario">
            <input class="inputL" type="password" name="password" placeholder="Ingresa tu contraseña">
            <button class="btnL" name="inicio" type="submit">Inicio</button>
            <a href="regisrtar.php">Registrate <strong>ahora</strong></a>
        </form>
    </div>

</body>

</html>