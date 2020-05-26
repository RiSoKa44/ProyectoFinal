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
    echo $misesion;
    $result = $conn->query($sql);
    print_r($result->num_rows);
    if ($result->num_rows > 0) {
      print_r("Actualizar Registro");
        // output data of each row
        $sql = "UPDATE SeleccionJugador SET 
      IDTOP = ".$top.",
      IDJUNGLA = ".$jung.",
      IDMID = ".$mid.",
      IDADC=".$adc.",
      IDSUPP = ".$supp." WHERE Usuario = ".$misesion."";
  if ($conn->query($sql) === TRUE) {
    
    echo "Actualizado";
    echo $sql;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
            
            header("Location: /PaginaPrincipal");
        
    } else {
    /* Insert */
    print_r("Añadido nuevo registro");
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
?>