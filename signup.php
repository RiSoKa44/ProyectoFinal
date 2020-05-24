<?php

  
  require 'database.php';

  $message = '';
 $email = $_POST['email'];
 $pass = $_POST['password'];
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuario (email, password) 
    VALUES ('" . $email . "', '" . $pass . "')";
    $stmt = $conn->prepare($sql);
    
    if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo $sql;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
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
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registra't</h1>
    <span>o <a href="login.php">Login</a></span>

    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="Enter your email">
      <input name="password" type="password" placeholder="Enter your Password">
      <input name="confirm_password" type="password" placeholder="Confirm Password">
      <input type="submit" value="Submit">
    </form>

  </body>
</html>
