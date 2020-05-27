<!DOCTYPE html>
<?php
include 'header.php';
?>

<!-- BODY -->

<?php
include 'navBar.php';

session_start();
$misesion = $_SESSION['user_id'];
print_r("<h1 id='sess' class='". $misesion . "'></h1>");
?>

<body class="proyecto">
    <div class="contenidoSalas">
    <?php
    require "database.php";

    $sql = "SELECT JefeSala FROM salasJuego 
     WHERE JefeSala = '" . $misesion . "'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        print_r('<button id="crearSala"><a class="nav-link" onclick="mostrarMiSala()">Mostrar Mi Sala</a></button>');
    }else{
        print_r('<button id="crearSala"><a class="nav-link" onclick="crearSala()">Crear Sala</a></button>');
        
    }
    ?>
        
        <button id="unirseSala"><a class="nav-link" onclick="unirseASala()">Unirse a Sala</a></button>
        
    </div>
    <div id="laSala"></div>
    
</body>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="JS/salas.js"></script>

</html>