<?php
require_once '../connection/connection.php';
session_start();

// Crear una instancia de la clase Conectar
$conectar = new Conectar();

// Obtener la conexión llamando al método conexion()
$conexion = $conectar->conexion();




$usuario = $_POST['usuario'];
$clave = $_POST['clave'];


// Consulta para obtener el rol del usuario
$r = "SELECT rol FROM usuarios WHERE usuario = '$usuario'";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $r);

// Verificar si la consulta tuvo resultados
if ($resultado && mysqli_num_rows($resultado) > 0) {
    // Obtener el rol del usuario
    $fila = mysqli_fetch_assoc($resultado);
    $rol = $fila['rol'];
    
}

$q = "SELECT COUNT(*) as contar from usuarios where usuario = '$usuario' and password = '$clave'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if ($array['contar']>0) {
    $_SESSION['username'] = $usuario;
    $_SESSION['rol'] = $rol;
    header("location: ../index.php");

}else{
    echo "DATOS INCORRECTOS";
}


?>
