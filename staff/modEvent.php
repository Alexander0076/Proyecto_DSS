<?php
require_once '../config/conexion.php';
include '../templates/header.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $idevent = $_GET['idevent'];
    $query1 = mysqli_query($conn, "SELECT * from eventos  ");

    while ($consulta = mysqli_fetch_array($query1)) {



        $TituloE = $consulta['titulo'];
        $DescripcionE =  $consulta['descripcion'];
        $FechaE =  $consulta['fecha'];
        $id =  $consulta['Id_eventos'];
    }
   $fechaE1= str_replace('-','/',date('d-m-Y',strtotime($FechaE)));

    ?>

    <form id="save-form" name="formactualiza" class="form1" action="../controller/evento.php" method="post">
        <h3 class="text-center text-success">Agregar evento</h3>
        <input style='width:50%' type="hidden" name="id" value="<?php echo $id;?> ">
        <div class="form-group">
            <label for="nombre" class="text-success"><span class="text-danger">* </span>Nombre:</label><br>
            <input  value="<?php echo $TituloE;?> " type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="DUI" class="text-success"><span class="text-danger">* </span>Descripcion:</label><br>
            <input value="<?php echo $DescripcionE;?> " type="text" name="desc" id="desc" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="correo" class="text-success"><span class="text-danger">* </span>Fecha:</label><br>
            <input value="<?php echo  $fechaE1;?> " type="text" name="fecha" id="fecha" class="form-control" required>
        </div>

        <div class="modal-footer d-flex justify-content-center">
            <input class="btn btn-primary" type="submit" name="modificar" value="Ingresar">
    </div>
  
    </form>

</body>

</html>