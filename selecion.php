
<!--Equipos-->
<div v-if="equipos">
    <div class="equipos">
        <div class="plantillaEquipo" v-for='equipo in equipos'>
            <h2>{{equipo.Nombre}}</h2>
            <img class="imgEquipos pointer" v-bind:src="'./IMG/Equipos/' + equipo.Logo" width="100" height="100" @click="getJugadores(equipo.ID) , getEntrenadores(equipo.ID)" />
        </div>
    </div>
    <br>
</div>
<!--Ligas-->

<!--Jugadores-->
<div v-if="jugadores">
    <div class="jugadores">
        <div class="fichaJugador" v-for='jugador in jugadores'>
            <h2>{{jugador.Nombre}}</h2>
            <img class="imgjugadores pointer" v-bind:src="'./IMG/JugadoresYEntrenadores/' + jugador.Imagen" width="100" height="100" />
            <p>{{jugador.Rol}}</p>
        </div>
    </div>
    <br>
</div>
<!--Jugadores-->

<!--Entrenador-->
<div v-if="entrenadores">
    <div class="entrenadores">
        <div class="fichaEntrenador" v-for='entrenador in entrenadores'>
            <h2>{{entrenador.Nombre}}</h2>
            <img class="imgEntrenador pointer" v-bind:src="'./IMG/JugadoresYEntrenadores/' + entrenador.Imagen" width="100" height="100" />
        </div>
    </div>
</div>
<!--Entrenador-->

</ul>