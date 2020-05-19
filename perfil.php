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
            <button id="mostrarSelect"><a class="nav-link" @click="getJugadoresSelecteds()">Ver Mi Selección</a></button>
        </div>

        <div id="selecJugar" class="selecJugar">
            <div v-for='sJug in selecJugar'>
                <h2 id="idsJugadoresSel" :idDelTop="sJug.IDTOP" :idDelJung="sJug.IDJUNGLA" :idDelMid="sJug.IDMID" :idDelAdc="sJug.IDADC" :idDelSupp="sJug.IDSUPP"></h2>
            </div>
        </div>
        <div id="fichasSelec" class="fichasSeleccionadosPerfil">
        <div v-for='Top in jugTop'>
            <h2>{{Top.Nombre}}</h2>
            <img class="imgjugadores pointer" v-bind:src="'./IMG/JugadoresYEntrenadores/' + Top.Imagen" width="100" height="100" @click="selectJugador(jugador)" />
            <p>{{Top.Rol}}</p>
        </div>
        <div v-for='Jung in jugJung'>
            <h2>{{Jung.Nombre}}</h2>
            <img class="imgjugadores pointer" v-bind:src="'./IMG/JugadoresYEntrenadores/' + Jung.Imagen" width="100" height="100" @click="selectJugador(jugador)" />
            <p>{{Jung.Rol}}</p>
        </div>
        <div v-for='Mid in jugMid'>
            <h2>{{Mid.Nombre}}</h2>
            <img class="imgjugadores pointer" v-bind:src="'./IMG/JugadoresYEntrenadores/' + Mid.Imagen" width="100" height="100" @click="selectJugador(jugador)" />
            <p>{{Mid.Rol}}</p>
        </div>
        <div v-for='Adc in jugAdc'>
            <h2>{{Adc.Nombre}}</h2>
            <img class="imgjugadores pointer" v-bind:src="'./IMG/JugadoresYEntrenadores/' + Adc.Imagen" width="100" height="100" @click="selectJugador(jugador)" />
            <p>{{Adc.Rol}}</p>
        </div>
        <div v-for='Supp in jugSupp'>
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

