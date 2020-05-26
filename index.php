<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {

$id = $_SESSION['user_id'];

     $sql = "SELECT id, email, password, nickname, data_naixement FROM usuario WHERE id = '" . $id . "'";

    $result = $conn->query($sql);
    $user = null;
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $user = $result;
        }
    } else {
    echo "0 results";
}
  }
$conn->close();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Esport Madness</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>
    
    <?php if(!empty($user)): ?>
      <a href="PaginaPrincipal.php">
        Inicio
      </a>
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>
      <h1>Login o Registre</h1>

      <a href="login.php">Login</a> o
      <a href="signup.php">Registre</a>
    <?php endif; ?>
  </body>
</html>
