<?php
require 'conexion.php';
session_start();


$Nombre= $_POST['Nombre'];
$Contrasena= $_POST['Contraseña'];

$query = "SELECT * FROM Usuario WHERE Nombre='" . $Nombre. "' AND Contrasena='" .$Contrasena. "'";

$result = mysqli_query($conn, $query);
$numRows = mysqli_num_rows($result);

print_r($numRows);

$array= mysqli_fetch_array($result);

if ($numRows>0){
    $_SESSION['Nombre']=$Nombre;
    header("Location: ../PaginaPrincipal.php");
}else{
    echo $query;

    echo "datos incorrectos";
}

?>