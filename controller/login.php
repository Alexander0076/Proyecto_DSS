<?php
require_once '../conexion/conexion.php';
?>
<?php
session_start();
if (isset($_POST['inicio'])) {
    $Usuario = $_POST['usuario'];
    $Password = $_POST['password'];
    if (!empty($Usuario) && !empty($Password)) {
        $ResultadoCon;
        $queryr1 = mysqli_query($conn, "SELECT COUNT(*) as 'Resultado' FROM usuario u WHERE u.usuario = '$Usuario' AND u.contrasena = '$Password'");
        while ($consulta = mysqli_fetch_array($queryr1)) {
            $ResultadoCon = $consulta['Resultado'];
        }
        if ($ResultadoCon == 1) {
            $queryr5 = $queryr1 = mysqli_query($conn, "SELECT tp.tipoUsuario FROM usuario u INNER JOIN tipousuario tp on tp.Id_tipoUsuario = u.Id_tipousuario WHERE u.usuario = '$Usuario';");
            $_SESSION['UsuarioIni'] = $Usuario;
            $resulTPU;
            while ($q5R = mysqli_fetch_array($queryr5)) {
                $resulTPU = $q5R['tipoUsuario'];
            }
            if ($resulTPU = 'Usuario') {
                header('Location: ../view/inicio.php');
            } elseif ($resulTPU = 'Admin') {
            } elseif ($resulTPU = 'Staf') {
            }
        } else if ($ResultadoCon == 0) {
            header("location:../index.php" );
        }
    } else {
        header("location:../index.php" );
    }
} else if (isset($_POST['registrar'])) {
    $NombreUN = $_POST['nombre'];
    $UsuarioN = $_POST['usuarion'];
    $contraN = $_POST['password'];
    if (!empty($NombreUN && !empty($UsuarioN) && !empty($contraN))) {
        $ResultaN;
        $queryr3 = mysqli_query($conn, "SELECT COUNT(*) as 'Resultado' FROM usuario u WHERE u.usuario = '$UsuarioN'");
        while ($result = mysqli_fetch_array($queryr3)) {
            $ResultaN = $result['Resultado'];
        }
        if ($ResultaN == 0) {
            $query2 = "INSERT INTO usuario(Nombre,usuario,contrasena,Id_tipousuario) VALUES('$NombreUN','$UsuarioN','$contraN',1)";
            mysqli_query($conn, $query2);
            header('Location: ../index.php');
        } else {
            header("location:../regisrtar.php" );

        }
    } else {


        header("location:../regisrtar.php" );
    }
}

?>
