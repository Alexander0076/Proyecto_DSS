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
        $query1 = "SELECT COUNT(*) as 'Resultado' FROM usuario u WHERE u.usuario = $Usuario AND u.contrasena = $Password";
        $queryr1 = mysqli_query($conn,"SELECT COUNT(*) as 'Resultado' FROM usuario u WHERE u.usuario = '$Usuario' AND u.contrasena = '$Password'");
        while($consulta = mysqli_fetch_array($queryr1)){
            $ResultadoCon = $consulta['Resultado'];

        }
        if ($ResultadoCon == 1) {
            $_SESSION['UsuarioIni'] = $Usuario;    
            header('Location: ../view/inicio.php');
        }else if ($ResultadoCon == 0) {
        }
       }else {  
           echo "Debe ingresar los datos requeridos";
       }
    }else if (isset($_POST['registrar'])) {
        $NombreUN = $_POST['nombre'];
        $UsuarioN = $_POST['usuarion'];
        $contraN = $_POST['password'];
        if (!empty($NombreUN && !empty($UsuarioN) && !empty($contraN))) {
            $ResultaN;
            $queryr3 = mysqli_query($conn,"SELECT COUNT(*) as 'Resultado' FROM usuario u WHERE u.usuario = '$UsuarioN'");
            while ($result = mysqli_fetch_array($queryr3)) {
                $ResultaN = $result['Resultado'];
            } 
           if ($ResultaN == 0) {
            $query2 = "INSERT INTO usuario(Nombre,usuario,contrasena,Id_tipousuario) VALUES('$NombreUN','$UsuarioN','$contraN',1)";
            mysqli_query($conn,$query2);      
            header('Location: ../index.php');
           } else {
               echo "El Usuario ya ha sido Ingresado";
           }
        }else {
            
        }
        
    }

?>