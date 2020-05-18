<!DOCTYPE html>
<?php
include 'header.php';
?>

<!-- BODY -->

<?php
include 'navBar.php';
?>
<div id="elJuego">
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

<div>
    <button id="guardarSel" class="btn btn-primary" onclick="guardarSeleccion()">Guardar Selección</button>
    <button id="guardarSel" class="btn btn-primary" onclick="">Borrar Selección</button>
</div>

<div>
    <div class="dropdown">
    <label for="cars"></label>
        <select id="cars"  class="btn btn-primary dropdown-toggle">
        <option value="none" selected disabled hidden> 
          Filtro Por Linea/Rol
      </option> 
            <option value="TOP">TOP</option>
            <option value="JUNG">JUNGLA</option>
            <option value="MEDIO">MEDIO</option>
            <option value="ADC">ADC</option>
            <option value="SUPP">SUPP</option>
        </select>
    </div>
</div>
</div>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="JS/elJuego.js"></script>