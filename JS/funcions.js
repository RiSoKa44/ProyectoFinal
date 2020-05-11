var Fantasy = new Vue({
    el: '#proyecto',
    data: {
        equipos: null,
        juegos: null,
        ligas: null,
        jugadores: null,
        entrenadores: null,
    },
    created: function() {
        this.getJuegos();
    },

    methods: {
        getJuegos: function() {
            document.getElementById("selecionJugadores").style.display = "none"
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Juegos')
                .then(response => {
                    this.juegos = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
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
        getJugadores: function(ID) {
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Jugador?filter=Equipo,eq,' + ID)
                .then(response => {
                    this.jugadores = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
        getEntrenadores: function(ID) {
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Entrenadores?filter=Equipo,eq,' + ID)
                .then(response => {
                    this.entrenadores = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
        selectJugador: function(jugador) {
            var jugadorID = jugador.ID;
            var jugadorRol = jugador.Rol;
            var jugadorImg = jugador.Imagen;
            document.getElementById(jugadorRol).src = "./IMG/JugadoresYEntrenadores/" + jugadorImg;
            this.insertBBDD(jugador);
        },
        insertBBDD: function(jugador) {
            console.log("hola");
            axios.get('./insertIntoUserSelection.php')
                .then(response => {
                    console.log("Manel Gordo");
                    this.todos = response.data
                    console.log(this.todos);
                })
                .catch(error => console.error(error))
        },
    }
})