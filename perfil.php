<!DOCTYPE html>
<?php
include 'header.php';
?>

<!-- BODY -->

<?php
include 'navBar.php';

session_start();
print_r($_SESSION['user_id']);
$misesion = $_SESSION['user_id'];
print_r($misesion);
/*DOMDocument::getElementById("perfil");
DOMDocument::createAttribute($misesion);*/
?>

<body class="proyecto" class="bg-light">
    <div id="perfil" class="container">
        <!--Perfil-->
        <div id="perfilUsuario" class="perfilUsuario">
            <div id="perfilSuperior" clas="perfilSuperior" v-for='pUs in perfilUsuario'>
            <div id="avatar"><img v-bind:src="pUs.Avatar" alt="Avatar Usuario" height="200px" width="300px"></div>
                <h1>{{pUs.Nick}}</h1>
                <h2>Nombre: {{pUs.Nombre}} {{pUs.Apellido}}</h2>
                <h2 v-if="1">Sexo: Hombre</h2>
                <h2 v-else>Sexo: Mujer</h2>
                <h2>Fecha de Nacimiento: {{pUs.Fecha_Cumpleanos}} </h2>
            </div>
            <button id="mostrarSelect"><a class="nav-link" @click="getJugadoresSelecteds()">Ver Mi Selección</a></button>
        </div>

        <div id="selecJugar" class="selecJugar">
            <div v-for='sJug in selecJugar'>
                <h2 id="idsJugadoresSel" :idDelTop="sJug.IDTOP" :idDelJung="sJug.IDJUNGLA" :idDelMid="sJug.IDMID" :idDelAdc="sJug.IDADC" :idDelSupp="sJug.IDSUPP"></h2>
            </div>
        </div>
        <div id="fichasSelec" class="fichasSeleccionadosPerfil">
        <div class="losJugadores" v-for='Top in jugTop'>
            <h2>{{Top.Nombre}}</h2>
            <img class="imgjugadores pointer" v-bind:src="'./IMG/JugadoresYEntrenadores/' + Top.Imagen" width="100" height="100" @click="selectJugador(jugador)" />
            <p>{{Top.Rol}}</p>
        </div>
        <div class="losJugadores" v-for='Jung in jugJung'>
            <h2>{{Jung.Nombre}}</h2>
            <img class="imgjugadores pointer" v-bind:src="'./IMG/JugadoresYEntrenadores/' + Jung.Imagen" width="100" height="100" @click="selectJugador(jugador)" />
            <p>{{Jung.Rol}}</p>
        </div>
        <div class="losJugadores" v-for='Mid in jugMid'>
            <h2>{{Mid.Nombre}}</h2>
            <img class="imgjugadores pointer" v-bind:src="'./IMG/JugadoresYEntrenadores/' + Mid.Imagen" width="100" height="100" @click="selectJugador(jugador)" />
            <p>{{Mid.Rol}}</p>
        </div>
        <div class="losJugadores" v-for='Adc in jugAdc'>
            <h2>{{Adc.Nombre}}</h2>
            <img class="imgjugadores pointer" v-bind:src="'./IMG/JugadoresYEntrenadores/' + Adc.Imagen" width="100" height="100" @click="selectJugador(jugador)" />
            <p>{{Adc.Rol}}</p>
        </div>
        <div class="losJugadores" v-for='Supp in jugSupp'>
            <h2>{{Supp.Nombre}}</h2>
            <img class="imgjugadores pointer" v-bind:src="'./IMG/JugadoresYEntrenadores/' + Supp.Imagen" width="100" height="100" @click="selectJugador(jugador)" />
            <p>{{Supp.Rol}}</p>
        </div>
        </div>
        <button><a class="nav-link" href="PaginaPrincipal.php">Tornar</a></button>
    </div>

    
    </div>
</body>


<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="JS/perfil.js"></script>


</html>

