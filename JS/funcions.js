var Fantasy = new Vue({
    el: '#proyecto',
    data: {
        equipos: null,
        juegos: null,
        ligas: null,
        jugadores: null,
        entrenadores: null,
        jugadorSeleccionadoTop: null,
        ByRol: null,
    },
    created: function() {
        this.getJuegos();
    },

    methods: {
        /*Api: 
         * metodo para obtención de Juegos 
         */
        getJuegos: function() {
            document.getElementById("selecionJugadores").style.display = "none";
            document.getElementById("filtros").style.display = "none";
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Juegos')
                .then(response => {
                    this.juegos = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
        /*Api: 
         * metodo para obtención de Equipos 
         */
        getEquipos: function(ID) {
            this.jugadores = null;
            this.entrenadores = null;
            document.getElementById("juegos").style.display = "none";
            document.getElementById("ligas").style.display = "none";
            document.getElementById("selecionJugadores").style.display = "grid"
            document.getElementById("filtros").style.display = "grid";
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Equipos?filter=ID_Liga,eq,' + ID)
                .then(response => {
                    this.equipos = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
        /*Api: 
         * metodo para obtención de Ligas 
         */
        getLigas: function(ID) {
            this.equipos = null;
            this.jugadores = null;
            this.entrenadores = null;
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Ligas?filter=Juego,eq,' + ID)
                .then(response => {
                    this.ligas = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
        /*Api: 
         * metodo para obtención de Jugadores 
         */
        getJugadores: function(ID) {
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Jugador?filter=Equipo,eq,' + ID)
                .then(response => {
                    this.jugadores = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
        /*Api: 
         * metodo para obtención de Entrenadores 
         */
        getEntrenadores: function(ID) {
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Entrenadores?filter=Equipo,eq,' + ID)
                .then(response => {
                    this.entrenadores = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },

        getFiltrado: function() {
            var select = document.getElementById("rol");
            var opt = select.options[select.selectedIndex];
            var rolSelected = opt.value;
            console.log(rolSelected);
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Jugador?filter=Rol,eq,' + rolSelected)
                .then(response => {
                    this.ByRol = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
        /* Cambia la imagen
         * de los jugadores seleccionados
         * por el usuario 
         */
        selectJugador: function(jugador) {
            var jugadorID = jugador.ID;
            var jugadorRol = jugador.Rol;
            var jugadorImg = jugador.Imagen;
            document.getElementById(jugadorRol).src = "./IMG/JugadoresYEntrenadores/" + jugadorImg;
            document.getElementById(jugadorRol).setAttribute("Identificador", jugador.ID);
        },
        /* Envia al servidor los
         * datos elegidos por el jugador para
         * hacer print en la BBDD
         */
    }
})

/* Guardar la selección hecha por 
 * el jugador al hacer click en el boton 
 * guardar seleccion
 * */
function guardarSeleccion() {
    var top = document.getElementById("Top").getAttribute("Identificador");
    var jung = document.getElementById("Jungla").getAttribute("Identificador");
    var mid = document.getElementById("Mid").getAttribute("Identificador");
    var adc = document.getElementById("Adc").getAttribute("Identificador");
    var supp = document.getElementById("Supp").getAttribute("Identificador");


    var someData = [
        { superior: top, junglero: jung, medio: mid, carry: adc, soporte: supp },
    ];

    this.insertBBDD(someData);
}

function mostrarEquipos() {
    console.log(document.getElementById("equipos"));
    if (document.getElementById("equipos").getAttribute("enmuestra") == "si") {
        document.getElementById("equipos").style.display = "none";
        document.getElementById("equipos").setAttribute("enmuestra", "no");
    } else {
        document.getElementById("equipos").style.display = "grid";
        document.getElementById("equipos").setAttribute("enmuestra", "si");
    }
}

function insertBBDD(jugadores) {
    axios.post('./insertIntoUserSelection.php', jugadores)
        .then(response => {
            this.todos = response.data
            console.log(this.todos);
        })
        .catch(error => console.error(error))
}