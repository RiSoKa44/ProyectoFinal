<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /PaginaPrincipal.php');
  }
  require 'database.php';

    $email = $_POST['email'];

  if (!empty($_POST['email']) && !empty($_POST['password'])) {

     $sql = "SELECT id, email, password
     FROM usuario 
     WHERE email = '" . $email . "'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["email"]. " " . $row["password"]. "<br>";
            $_SESSION['user_id'] = $row["id"];
            
            header("Location: /PaginaPrincipal.php");
        }
    } else {
    echo "0 results";
}
$conn->close();
  } 
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>
    <span>or <a href="signup.php">SignUp</a></span>

    <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="Enter your email">
      <input name="password" type="password" placeholder="Enter your Password">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
