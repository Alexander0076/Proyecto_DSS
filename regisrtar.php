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
        <p style="margin: 0 18%;"><strong>Registrate</strong></p>
        <form action="controller/login.php" method="POST">
            <input class="inputL" type="text" name="nombre" placeholder="Ingresa su nombre completo">
            <input class="inputL" type="text" name="usuarion" placeholder="Ingresa un nombre de usuario">
            <input class="inputL" type="password" name="password" placeholder="Ingresa una contraseña">
            <button class="btnL" name="registrar" type="submit">Registrar</button>
            <a href="index.php"><strong style="margin: 0 10%;">Regresar</strong></a>
        </form>
    </div>

</body>

</html>