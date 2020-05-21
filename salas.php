<?php

?>

<!DOCTYPE html>
<?php
include 'header.php';
?>

<!-- BODY -->

<?php
include 'navBar.php';
?>

<body class="proyecto">
    <div class="contenidoSalas">
        <button id="crearSala"><a class="nav-link" onclick="crearSala()">Crear Sala</a></button>
        <button id="unirseSala"><a class="nav-link" onclick="unirseASala()">Unirse a Sala</a></button>
    </div>

    <div id="codigoSala" class="codigoSalas">
        
    </div>
</body>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="JS/salas.js"></script>

</html>