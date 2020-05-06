var Fantasy = new Vue({
    el: '#proyecto',
    data: {
        equipos: [],
        juegos: [],
        ligas: [],
        jugadores: [],
        entrenadores: [],
    },
    created: function() {
        this.GETTODOS();
        this.GETTODOS2();
        this.GETTODOS3();
        this.GETTODOS4();
        this.GETTODOS5();

    },

    methods: {
        GETTODOS: function() {
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Juegos')
                .then(response => {
                    this.juegos = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
        GETTODOS2: function() {
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Equipos')
                .then(response => {
                    this.equipos = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
        GETTODOS3: function() {
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Ligas')
                .then(response => {
                    this.ligas = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
        GETTODOS4: function() {
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Jugador')
                .then(response => {
                    this.jugadores = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
        GETTODOS5: function() {
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Entrenadores')
                .then(response => {
                    this.entrenadores = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
    }
})