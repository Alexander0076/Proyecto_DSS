<?php
include '../templates/head.php';
require_once '../conexion/conexion.php';
session_start();

 $id_usini=$_SESSION['UsuarioIni'];
 $query1=mysqli_query($conn,"SELECT Id_usuario from usuario WHERE usuario='$id_usini'");
 while($consulta = mysqli_fetch_array($queryr1)){
    $ResultadoCon = $consulta['Id_usuario'];

}
?>
<h1 class='text-center text-dark pt-5'>LISTA DE EMPLEADOS</h1>
 
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  id="save-form" name="formactualiza" class="form1"  action="controller/evento.php" method="post">
                            <h3 class="text-center text-success">Agregar evento</h3>
                            <input style='width:50%' type="hidden" name="id" id="idEmpleado">
                            <div class="form-group">
                                <label for="nombre" class="text-success"><span class="text-danger">* </span>Nombre:</label><br>
                                <input type="text" name="nombre" id="nombre" pattern="^[a-zA-Z áéíóúÁÉÍÓÚñÑs]*$" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="DUI" class="text-success"><span class="text-danger">* </span>Descripcion:</label><br>
                                <input type="text" name="desc" id="desc" class="form-control" pattern="[0-9]{8}-[0-9]{1}" placeholder="00000000-0" required>
                            </div>
                            <div class="form-group">
                                <label for="DUI" class="text-success"><span class="text-danger">* </span>Id Usuario:</label><br>
                                <input type="text" name="idus" id="idus" class="form-control" pattern="[0-9]{8}-[0-9]{1}" placeholder="00000000-0" required>
                            </div>
                            <div class="form-group">
                                <label for="correo" class="text-success"><span class="text-danger">* </span>Feha:</label><br>
                                <input type="date" name="fecha" id="fecha" class="form-control"  required>
                            </div>

                            </form>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-deep-orange">Sign up</button>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch
    Modal Register Form</a>
</div>


<?php
include '../templates/footer.php';
?>