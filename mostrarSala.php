<?php

require 'database.php';


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
        print_r("<div class='lasala'><h1>Sala de Juego</h1> <h4 class='codigoSala'>Código de sala: " .$row['Sala'] . "</h4>");
        
        $sql = "SELECT Nick FROM usuario  
                WHERE id = '" . $row['JefeSala'] . "'";

        $result = $conn->query($sql);
        $row2 = $result->fetch_assoc();
        print_r("<h3> Jefe de Sala: " . $row2['Nick'] . "</h2></div>");


        print_r("<ul>");
        $decodedParticipantes = json_decode($row['Participantes']);     
        foreach ($decodedParticipantes as $key => $value) {
          $sqlPart = "SELECT Nick FROM usuario  
                WHERE id = '" . $value . "'";

        $resultPart = $conn->query($sqlPart);
        $rowPart = $resultPart->fetch_assoc();
        print_r("<h3> # " . $rowPart['Nick'] . "</h2></div>");
        }
        print_r("</ul>");
    }
    json_encode($result);
} else{

}



?>
