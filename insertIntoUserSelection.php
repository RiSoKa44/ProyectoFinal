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

/* Método para obtener el data enviado 
* en el POST en formato json y transformarlo 
* en algo que se puede manipular 
*/
$data=json_decode(file_get_contents('php://input'),1);
print_r($data);
print_r($data["ID"]);

$jugadorID = $_GET['jugador'];

echo $jugadorID;


/* QUERYS */

/* Insert */
$sql = "INSERT INTO SeleccionJugador (Usuario, IDJugador)
VALUES ('1', '" . $data["ID"] . "')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo $sql;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>