<?php
require 'database.php';

$message = '';
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$pass = $_POST['password'];
$nick= $_POST['nick'];
$data= $_POST['data_naixement'];

if (!empty($_POST['email']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['password'])  && !empty($_POST['nick']) && !empty($_POST['data_naixement'])) {

    $sql="SELECT email FROM usuario WHERE email= '". $email . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      print_r("<h2 style='color:#FF0000'>Email en uso, pruebe otro </h2>");
    }else{
      $sql = "INSERT INTO usuario (email, nombre, apellido, password, nick, data_naixement, avatar) 
         VALUES ('" . $email . "', '" . $nombre . "', '" . $apellido . "', '" . $pass . "', '" . $nick . "', '" . $data . "', 'https://thumbs.dreamstime.com/b/icono-de-avatar-s%C3%ADmbolo-plano-aislado-en-blanco-124920496.jpg')";
        $stmt = $conn->prepare($sql);
        if ($conn->query($sql) === TRUE) {
          print_r("<h2 style='color:MediumSeaGreen' >Usuario registrado correctamente!</h2><p>Puede realizar el login</p>");
        } else {
          print_r("<h2 style='color:#FF0000'>Se a producido un error inesperado/h2>");
        }
    }
}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/logreg.css">
  </head>
  <body>
  <div class="fullContent">
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registrarme</h1>
    <span>o<a href="login.php">Iniciar Sessión</a></span>

    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="Enter your Email">
      <input name="nombre" type="text" placeholder="Introduce Nombre">
      <input name="apellido" type="text" placeholder="Introduce Apellido">
      <input name="nick" type="text" placeholder="Enter your Nick">
      <input name="data_naixement" type="date" min="1800-01-01" max="2020-12-31">
      <input name="password" type="password" placeholder="Enter your Password">
      <input name="confirm_password" type="password" placeholder="Confirm Password">
      <input type="submit" value="Submit">
    </form>
  </div>
  </body>
</html>
