<!DOCTYPE html>
<?php
include 'header.php';
?>

<!-- BODY -->

<?php
include 'navBar.php';
?>

<body class="bg-light">
    <div id="perfil" class="container">
        <!--Perfil-->
        <div id="perfilUsuario" class="perfilUsuario">
            <div v-for='pUs in perfilUsuario'>
                <h1>{{pUs.Nick}}</h1>
                <img v-bind:src="pUs.Avatar" alt="Avatar Usuario" height="200px" width="300px">
                <h2>{{pUs.Nombre}} {{pUs.Apellido}}</h2>
                <h1 v-if="1">Hombre</h1>
                <h1 v-else>Mujer</h1>
                <h2>Cumpleaños {{pUs.Fecha_Cumpleanos}}
            </div>
            <button id="mostrarSelect"><a class="nav-link" @click="getSeleccion()">Ver Mi Selección</a></button>
            
            <div id="selecJugar" class="selecJugar">
                <div v-for='sJug in selecJugar'>
                    {{sJug}}
                </div>
            </div>
        </div>
        <button><a class="nav-link" href="PaginaPrincipal.php">Tornar</a></button>
    </div>
</body>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="JS/perfil.js"></script>

</html>