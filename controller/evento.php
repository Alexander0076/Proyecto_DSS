<?php
require_once '../config/conexion.php';
?>

<?php

session_start();
$idE=$_GET['ideventE'];

$id_usini = $_SESSION['UsuarioIni'];
$query1 = mysqli_query($conn, "SELECT Id_usuario from usuario WHERE usuario='$id_usini'");
while ($consulta = mysqli_fetch_array($query1)) {
  $ResultadoCon = $consulta['Id_usuario'];
}

if  (isset($_POST['insertar'])) {
    $img='yxy.jpg';
    $NombreE= $_POST['nombre'];
    $DescripcionE = $_POST['desc'];
    $FechaE = $_POST['fecha'];
    $fechaE1= str_replace('/','-',date('Y-m-d',strtotime($FechaE)));

    // $query1 = "INSERT INTO eventos(titulo,descripcion,Id_usuario,fecha) VALUES('$NombreE','$DescripcionE','$ResultadoCon','$FechaE')";
    mysqli_query($conn,"INSERT INTO eventos(img,titulo,descripcion,Id_usuario,fecha) VALUES('$img','$NombreE','$DescripcionE',$ResultadoCon,'$fechaE1')");      
    header('Location: ../staff/evento.php');

}else if(isset($_POST['modificar'])){
    $idE=$_POST['id'];
    $NombreE= $_POST['nombre'];
    $DescripcionE = $_POST['desc'];
    $FechaE = $_POST['fecha'];
    $fechaE1= str_replace('/','-',date('Y-m-d',strtotime($FechaE)));

    mysqli_query($conn,"UPDATE eventos SET titulo='$NombreE',descripcion='$DescripcionE',fecha='$fechaE1' WHERE Id_eventos = $idE");      
    header('Location: ../staff/evento.php');




}else if (!empty($idE)) {
    mysqli_query($conn,"DELETE FROM eventos WHERE Id_eventos =$idE");      
   header('Location: ../staff/evento.php');
}



?>
