<?php
include '../templates/head.php';
require_once '../config/conexion.php';
?>
<section>
<?php
    $usarioini=$_SESSION['UsuarioIni'];

    $query1 = mysqli_query($conn, "SELECT Nombre, Foto,tipousuario FROM usuario u INNER JOIN tipousuario tu on tu.Id_tipoUsuario = u.Id_tipousuario WHERE tu.tipoUsuario = 'staff'");

    while ($consulta = mysqli_fetch_array($query1)) {  
    ?>
  <div class="staff">
        <h1>Staff</h1>
        <span class="span"></span>
        <div class="blockS">
            <div class="image">
                <img src="../img/<?php echo $consulta['Foto'];?>" alt="">
            </div>
            <div class="content">
                <strong>Nombre:  <?php echo $consulta['Nombre'];?> </strong>
                <p>Tipo usuario: <?php echo $consulta['tipousuario'];?></p>
            </div>
        </div>

    </div>
<?php
}
?>

  
</section>

<?php
include '../templates/footer.php';
?>