<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Radio</title>
</head>
<body>
    <?php
     session_start()
    ?>

<nav class="nav">
    <ul>
        <li><a href="../view/inicio.php">Inicio</a></li>
        <li><a href="../view/staff.php">Reproductor</a></li>
        <li><a href="../view/artistas.php">Artista</a></li>
        <li><a href="../view/evento.php">Evento</a></li>
        <li><a href="../view/staff.php">Staff</a></li>
        <li><a href="../view/contacto.php">Contacto</a></li>
        <?php
        $usuINI = $_SESSION['UsuarioIni'];
        echo "<li><a href='#'>$usuINI</a></li>"
        ?>
    </ul>
</nav>