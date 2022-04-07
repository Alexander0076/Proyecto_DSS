<?php
include '../templates/head.php';
require_once '../config/conexion.php';
?>
<section>
  <div class="evento">
    <h1>Eventos</h1>
    <?php
    $usarioini=$_SESSION['UsuarioIni'];

    $query1 = mysqli_query($conn, "SELECT Id_eventos, img, titulo, descripcion, fecha FROM eventos");

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