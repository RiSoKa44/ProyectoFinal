<?php

require 'database.php';


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$data = json_decode(file_get_contents('php://input'), 1);

session_start();
$misesion = $_SESSION['user_id'];

foreach ($data as $key => $value) {
  $codigo = $value["codigo"];
}

$sql = "SELECT Participantes FROM salasJuego 
     WHERE Sala = '" . $codigo . "'
     AND JefeSala != $misesion ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        $decodedParticipantes = json_decode($row['Participantes'], true);    
        array_push($decodedParticipantes, $misesion);
        foreach ($decodedParticipantes as $key => $value) {

            $sql2 = "SELECT Nick FROM usuario  
                WHERE id = '" .$value . "'";

            $result2 = $conn->query($sql2);
            $row2 = $result2->fetch_assoc();
            print_r("<h3> Miembro: " . $row2['Nick'] . "</h2></div>");
        }
    }

    $jsonArray = json_encode($decodedParticipantes);

    $sqlUpdate ="UPDATE salasJuego SET 
    Participantes = '" . $jsonArray . "'
    WHERE Sala = '" . $codigo . "'";

        if ($conn->query($sqlUpdate) === TRUE) {
        echo $sqlUpdate;
        } else {
        echo "Error: " . $sqlUpdate . "<br>" . $conn->error;
        }
}else{
    print_r("<h2 class='msgErrorUnion'>Esa sesión ya es tuya, lamentamos no poder unirte</h2>");
}
