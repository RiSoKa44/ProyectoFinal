<body>

    <ul id="proyecto" class="proyecto">

        <!--Juegos-->
        <div id="juegos" class="juegos">
            <div v-for='juego in juegos'>
                <h2>{{juego.Nombre}}</h2>
                <img class="imgJuegos pointer" v-bind:src="'./IMG/Juegos/' + juego.Imagen" @click="getLigas(juego.ID)" />
                <p>{{juego.Plataforma}}</p>
            </div>
        </div>
        <!--Juegos-->

        <br>

        <!--Ligas-->
        <div v-if="ligas">
            <div id="ligas" class="ligas">
                <div v-for='liga in ligas'>
                    <h2>{{liga.Nombre}}</h2>
                    <img class="imgLigas pointer" v-bind:src="'./IMG/Ligas/' + liga.Imagen" @click="getEquipos(liga.ID)"/>
                </div>
            </div>
            <br>
        </div>
        <!--Ligas-->
    