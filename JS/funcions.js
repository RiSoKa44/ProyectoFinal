var Fantasy = new Vue({
    el: '#proyecto',
    data: {
        equipos: null,
        juegos: null,
        ligas: null,
        jugadores: null,
        entrenadores: null,
        jugadorSeleccionadoTop: null,
    },
    created: function() {
        this.getJuegos();
    },

    methods: {
        /*Api: 
         * metodo para obtención de Juegos 
         */
        getJuegos: function() {
            document.getElementById("selecionJugadores").style.display = "none"
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
        /* Cambia la imagen
         * de los jugadores seleccionados
         * por el usuario 
         */
        selectJugador: function(jugador) {
            var jugadorID = jugador.ID;
            var jugadorRol = jugador.Rol;
            var jugadorImg = jugador.Imagen;
            document.getElementById(jugadorRol).src = "./IMG/JugadoresYEntrenadores/" + jugadorImg;
        },
        /* Envia al servidor los
         * datos elegidos por el jugador para
         * hacer print en la BBDD
         */
        insertBBDD: function(jugador) {
            axios.post('./insertIntoUserSelection.php', jugador)
                .then(response => {
                    this.todos = response.data
                    console.log(this.todos);
                })
                .catch(error => console.error(error))
        },
    }
})

/* Guardar la selección hecha por 
 * el jugador al hacer click en el boton 
 * guardar seleccion
 * */
function guardarSeleccion() {
    var top = document.getElementById("Top").getAttribute("src");
    var jung = document.getElementById("Jungla").getAttribute("src");
    var mid = document.getElementById("Mid").getAttribute("src");
    var adc = document.getElementById("Adc").getAttribute("src");
    var supp = document.getElementById("Supp").getAttribute("src");


    var someData = [
        { superior: top, junglero: jung, medio: mid, carry: adc, soporte: supp },
    ];

    this.finalSelectionJugadores(someData);
}

function finalSelectionJugadores(jugadores) {
    /* Hacemos el substring para quitarle el relleno a la imgaen
     * la compararemos para conseguir de vuelta el objeto jugador
     * con todos los datos que pueden ser necesarios de la BBDD
     * para su posterior inserción en la tabla de eleccion del jugador
     */
    var jugadorSeleccionadoTop;
    var jugadorSeleccionadoJung;
    var jugadorSeleccionadoMid;
    var jugadorSeleccionadoAdc;
    var jugadorSeleccionadoSupp;

    console.log(jugadores[0].superior.substring(29, 100));
    axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Jugador?filter=Imagen,eq,' + jugadores[0].superior.substring(29, 100))
        .then(response => {
            jugadorSeleccionadoTop = response.data.records,
                console.table(response.data.records);
        })
        .catch(error => console.error(error));


    var selJung = axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Jugador?filter=Imagen,eq,' + jugadores[0].junglero.substring(29, 100))
        .then(response => {
            jugadorSeleccionadoJung = response.data.records,
                console.table(response.data.records);
        })
        .catch(error => console.error(error));

    var selMid = axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Jugador?filter=Imagen,eq,' + jugadores[0].medio.substring(29, 100))
        .then(response => {
            jugadorSeleccionadoMid = response.data.records,
                console.table(response.data.records);
        })
        .catch(error => console.error(error));

    var selAdc = axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Jugador?filter=Imagen,eq,' + jugadores[0].carry.substring(29, 100))
        .then(response => {
            jugadorSeleccionadoAdc = response.data.records,
                console.table(response.data.records);
        })
        .catch(error => console.error(error));

    var selSupp = axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Jugador?filter=Imagen,eq,' + jugadores[0].soporte.substring(29, 100))
        .then(function(respone, data) {
            jugadorSeleccionadoSupp = response.data.records,
                console.table(response.data.records);
        })
        .catch(error => console.error(error));

    console.log(selTop);
}