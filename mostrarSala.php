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

session_start();
$misesion = $_SESSION['user_id'];

$sql = "SELECT ID, Sala, Participantes, JefeSala FROM salasJuego 
     WHERE JefeSala = '" . $misesion . "'";

$result = $conn->query($sql);


/*Si existe Actualizamos*/
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        print_r("<h1 class='codigoSala'>" .$row['Sala'] . "</h1>");
        print_r("<ul>");
        $decodedParticipantes = json_decode($row['Participantes']);
        
        print_r("</ul>");
        print_r("<h2>" . $row['JefeSala'] . "</h2>");
    }
    json_encode($result);
} else{

}



?>
