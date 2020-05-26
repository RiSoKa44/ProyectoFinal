<?php
require 'database.php';

$message = '';
$email = $_POST['email'];
$pass = $_POST['password'];
$nick= $_POST['nickname'];
$data= $_POST['data_naixement'];
  if (!empty($_POST['email']) && !empty($_POST['password'])  && !empty($_POST['nickname']) && !empty($_POST['data_naixement'])) {
      $sql = "INSERT INTO usuario (email, password, nickname, data_naixement) 
      VALUES ('" . $email . "', '" . $pass . "', '" . $nick . "', '" . $data . "')";
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
      <input name="nickname" type="text" placeholder="Enter your nickname">
      <input name="data_naixement" type="date" min="1900-01-01" max="2018-12-31">
      <input name="password" type="password" placeholder="Enter your Password">
      <input name="confirm_password" type="password" placeholder="Confirm Password">
      <input type="submit" value="Submit">
    </form>

  </body>
</html>
