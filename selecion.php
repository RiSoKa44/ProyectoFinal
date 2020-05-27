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
    
</div>

<div id="filtros">
<div id="botonesSeleccion">
        <button id="guardarSel" class="btn btn-primary" onclick="guardarSeleccion()">Guardar Selección</button>
        <button id="borrarSelccion" class="btn btn-primary" onclick="borrarSeleccion()">Borrar Selección</button>
        <button id="ocultarTodo" class="btn btn-primary" onclick="ocultarTodo()">Ocultar Todo</button>
    </div>
<div>
    <div class="dropdown">
    <label for="rol"></label>
        <select id="rol"  class="btn btn-primary dropdown-toggle" @change="getFiltrado()">
        <option value="none" selected disabled hidden> 
          Filtro Por Linea/Rol
      </option> 
            <option value="Top">TOP</option>
            <option value="Jungla">JUNGLA</option>
            <option value="Mid">MEDIO</option>
            <option value="Adc">ADC</option>
            <option value="Supp">SUPP</option>
        </select>
        <button id="guardarSel" class="btn btn-primary" onclick="mostrarEquipos()">Mostrar/Ocultar Equipos</button>
    </div>
    
</div>

</div>
<!--Equipos-->
<div v-if="equipos">
    <div id="equipos" class="equipos">
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
    <div id="jugadores" class="jugadores" muestra="no">
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
    <div id="entrenador" class="entrenadores">
        <div class="fichaEntrenador" v-for='entrenador in entrenadores'>
            <h2>{{entrenador.Nombre}}</h2>
            <img class="imgEntrenador pointer" v-bind:src="'./IMG/JugadoresYEntrenadores/' + entrenador.Imagen" width="100" height="100" />
        </div>
    </div>
</div>
<!--Entrenador-->

<!--ByRol-->
<div v-if="ByRol">
    <div id="ByRol" class="ByRol">
        <div class="fichaByRol" v-for='jByRol in ByRol'>
            <h2>{{jByRol.Nombre}}</h2>
            <img class="imgjByRol pointer" v-bind:src="'./IMG/JugadoresYEntrenadores/' + jByRol.Imagen" width="100" height="100" @click="selectJugador(jByRol)"/>
        </div>
    </div>
</div>
<!--ByRol-->

</ul>