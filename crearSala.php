<?php

require 'database.php';


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
$data = json_decode(file_get_contents('php://input'), 1);
print_r($data);

session_start();
print_r($_SESSION['user_id']);
$misesion = $_SESSION['user_id'];
print_r($misesion);

foreach ($data as $key => $value) {
  $codigo = $value["code"];
}
print_r("Codigo: " . $codigo);

//**QUERY DONDE INTRODUCE CODIGO DE SALA + JSON DE USUARIOS */
/*Comprobamos si existe una sala con ese código */
$sql = "SELECT Sala FROM salasJuego 
     WHERE Sala = '" . $codigo . "'";

$result = $conn->query($sql);

print_r("NumResults: " . $result->num_rows);

/*Si existe Actualizamos*/
if ($result->num_rows > 0) {
  print_r("Añadiendo a Sala");
  // output data of each row
  /** UPDATE QUERY */

  $preSql = "SELECT Participantes FROM salasJuego 
      WHERE Sala = '" . $codigo . "'";

  $resultadoPreQuery = $conn->query($preSql);

  $sql  = "UPDATE salasJuego SET 
       Participantes = " . $misesion . ",
       WHERE Sala = " . $codigo . "";
  if ($conn->query($sql) === TRUE) {
    echo $sql;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  header("Location: /PaginaPrincipal");
} else {

  $array = array('1'=> $misesion);
  $jsonArray = json_encode($array);
  /* Insert */
  $sql = "INSERT INTO salasJuego (Sala , Participantes,jefeSala) 
    VALUES ('" . $codigo . "','" . $jsonArray . "','" . $misesion . "')";


  print_r("Añadido nuevo registro");
  /** INSERT QUERY */

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  mysqli_close($conn);
}
?>