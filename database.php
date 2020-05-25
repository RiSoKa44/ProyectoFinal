<?php

$servername = "localhost";
$database = "pfinal";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
