<?php
include 'header.php';
?>

<!-- BODY -->

<?php
include 'navBar.php';
?>
<!-- Body -->


<?php

$usuariok= 'admin';
$contrasena= 'admin';

if($_POST['Nombre']== $usuariok && $_POST['Contraseña']==$contrasena){
    session_start();
    $_SESSION["verificado"] = "si";
}else{
    header("Location: index.php");
}

?>

<?php
if(isset($_SESSION['verificado'])){
    
}else{
    header ("Location: index.php");
}

?>


<?php
    include 'juegosYLigas.php';
    include 'selecion.php';
?>


</body>

<!--BODY-->

<?php
    include 'footer.php';
?>
</html>