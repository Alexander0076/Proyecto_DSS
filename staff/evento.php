<?php
include '../templates/header.php';
require_once '../config/conexion.php';


?>

<h1 class='text-center text-dark pt-5'>LISTA DE EVENTOS</h1>

<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="save-form" name="formactualiza" class="form1" action="../controller/evento.php" method="post">
          <h3 class="text-center text-success">Agregar evento</h3>
          <input style='width:50%' type="hidden" name="id" id="idEmpleado">
          <div class="form-group">
            <label for="nombre" class="text-success"><span class="text-danger">* </span>Nombre:</label><br>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="DUI" class="text-success"><span class="text-danger">* </span>Descripcion:</label><br>
            <input type="text" name="desc" id="desc" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="correo" class="text-success"><span class="text-danger">* </span>Feha:</label><br>
            <input type="date" name="fecha" id="fecha" class="form-control" required>
          </div>

          <div class="modal-footer d-flex justify-content-center">
            <input type="submit" name="insertar" value="Ingresar">
          </div>

        </form>

      </div>

    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Registrar evento</a>
</div>
<br>
<br>



<section>
  <div class="evento">
    <h1>Eventos</h1>
    <?php
    $usarioini=$_SESSION['UsuarioIni'];

    $query1 = mysqli_query($conn, "SELECT Id_eventos, img, titulo, descripcion, fecha FROM eventos e  INNER JOIN usuario u on u.Id_usuario = e.Id_usuario WHERE u.usuario = '$usarioini'");

    while ($consulta = mysqli_fetch_array($query1)) {  
    ?>
      <div class="blockE">
        <div class="image">
          <img src="../img/<?php echo $consulta['img'];?>" alt="">
        </div>
        <div class="content">
          <strong><?php echo $consulta['titulo'];?></strong>
          <p><?php echo $consulta['descripcion'];?></p>
          <br>
          <p><?php echo $consulta['fecha'];?></p>
          <a class="btn btn-primary"  href="modEvent.php?idevent='<?php echo $consulta['Id_eventos']?>'">Modificar </a>
          <a class="btn btn-danger" name="eliminar" onclick="ErrorLogin()" href="../controller/evento.php?ideventE='<?php echo $consulta['Id_eventos']?>'">Eliminar </a>

        </div>
       
      </div>
    <?php
    }
    ?>
  </div>
</section>


<?php
include '../templates/footer.php';
?>

<script type="text/javascript">
            function ErrorLogin(){
        var respuesta = confirm("¿Estas seguro de querer eliminar este registro?");
        if(respuesta == true){
           return true;
        }else {
        return false;      
}
}
</script>