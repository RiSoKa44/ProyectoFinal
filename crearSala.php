<?php

/* Conexión a BBDD */
/*$servername = "bbdd.electronica-garcilaso.cat";
$database = "ddb148915";
$username = "ddb148915";
$password = "/^cns1B/TfDP";*/

/* Conexión a BBDD */
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
    $codigo = $value["code"];
  }
  print_r($codigo);

  //**QUERY DONDE INTRODUCE CODIGO DE SALA + JSON DE USUARIOS */

  $sql = "SELECT Sala FROM salasJuego 
     WHERE Sala = '" . $codigo . "'";

    $result = $conn->query($sql);

    print_r($result->num_rows);
    if ($result->num_rows > 0) {
      print_r("Actualizar Registro");
        // output data of each row
       /** UPDATE QUERY */
  if ($conn->query($sql) === TRUE) {
    echo $sql;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
            
            header("Location: /PaginaPrincipal");
        
    } else {
    /* Insert */
    print_r("Añadido nuevo registro");
    /** INSERT QUERY */

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);
}
