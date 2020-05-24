<?php

/* Conexión a BBDD Server*//*
$servername = "bbdd.electronica-garcilaso.cat";
$database = "ddb148915";
$username = "ddb148915";
$password = "/^cns1B/TfDP";*/

/* Conexión a BBDD Local*/
$servername = "localhost";
$database = "pfinal";
$username = "root";
$password = "";

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

foreach ($data as $key => $value) {
  $top = $value["superior"];
  $jung = $value["junglero"];
  $mid = $value["medio"];
  $adc = $value["carry"];
  $supp = $value["soporte"];
}

print_r($top);
print_r($jung);
print_r($mid);
print_r($adc);
print_r($supp);


session_start();
print_r($_SESSION['user_id']);
$misesion = $_SESSION['user_id'];
print_r($misesion);

/* QUERYS */


$sql = "SELECT usuario FROM SeleccionJugador 
     WHERE usuario = '" . $misesion . "'";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["email"]. " " . $row["password"]. "<br>";
            $_SESSION['user_id'] = $row["id"];
            
            header("Location: /PaginaPrincipal");
        }
    } else {
    /* Insert */
    echo $misesion;
    $sql = "INSERT INTO SeleccionJugador (Usuario, IDTOP, IDJUNGLA, IDMID, IDADC, IDSUPP)
    VALUES ('" . $misesion . "', '" . $top . "', '" . $jung . "', '" . $mid . "', '" . $adc . "', '" . $supp . "')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      echo $sql;
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);
}
