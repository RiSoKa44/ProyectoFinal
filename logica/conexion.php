<?php

/* Conexión a BBDD */
$servername = "bbdd.electronica-garcilaso.cat";
$database = "ddb148915";
$username = "ddb148915";
$password = "/^cns1B/TfDP";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected Succesfully";


?>