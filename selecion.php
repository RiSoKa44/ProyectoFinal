<div id="selecionJugadores">
    <div><img id="Top" class="imgSeleccion pointer" src="./IMG/Seleccion/seleccion_jugadores.png" width="200" height="200" />
        <p class="seleccion_señal">TOP</p>
    </div>
    <div><img id="Jungla" class="imgSeleccion pointer" src="./IMG/Seleccion/seleccion_jugadores.png" width="200" height="200" />
        <p class="seleccion_señal">JUNGLA</p>
    </div>
    <div><img id="Mid" class="imgSeleccion pointer" src="./IMG/Seleccion/seleccion_jugadores.png" width="200" height="200" />
        <p class="seleccion_señal">MID</p>
    </div>
    <div><img id="Adc" class="imgSeleccion pointer" src="./IMG/Seleccion/seleccion_jugadores.png" width="200" height="200" />
        <p class="seleccion_señal">ADC</p>
    </div>
    <div><img id="Supp" class="imgSeleccion pointer" src="./IMG/Seleccion/seleccion_jugadores.png" width="200" height="200" />
        <p class="seleccion_señal">SUPP</p>
    </div>
    <button id="seleccionFinal" class="sendJugadores" @click="guardarSeleccion()">Guardar Selección</button> 
</div>

<div>

</div>
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
            <img class="imgjugadores pointer" v-bind:src="'./IMG/JugadoresYEntrenadores/' + jugador.Imagen" width="100" height="100" @click="selectJugador(jugador)" />
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