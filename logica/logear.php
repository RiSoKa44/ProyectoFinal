<?php
require 'conexion.php';
session_start();

$Nombre= $_POST['Nombre'];
$Contraseña= $_POST['Contraseña'];

$query = "SELECT COUNT(*) as contar from usuario where Nombre='$Nombre' and Contraseña='$Contraseña'";
$result = mysqli_query($conexion, $query);
$array= mysqli_fetch_array($result);

if ($array['contar']>0){
    $_SESSION['Nombre']=$Nombre;
    header("Location: ../PaginaPrincipal.php");
}else{
    echo "datos incorrectos";
}

?>