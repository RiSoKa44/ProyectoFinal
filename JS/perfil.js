var Perfil = new Vue({
    el: '#perfil',
    data: {
        perfilUsuario: null,
        selecJugar: null,
        jugTop: null,
        jugJung: null,
        jugMid: null,
        jugAdc: null,
        jugSupp: null,
    },
    created: function() {
        this.getInfoUser();
        this.getSeleccion();
    },
    methods: {
        /*Api: 
         * metodo para obtención de Juegos 
         */
        getInfoUser: function() {
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Usuarios')
                .then(response => {
                    this.perfilUsuario = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
        getSeleccion: function() {
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/SeleccionJugador')
                .then(response => {
                    this.selecJugar = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
        getJugadoresSelecteds: function() {
            var idsJugsSel = document.getElementById("idsJugadoresSel");
            console.log(idsJugsSel);

            var top = idsJugsSel.getAttribute("idDelTop");
            var jun = idsJugsSel.getAttribute("idDelJung");
            var mid = idsJugsSel.getAttribute("iDdelmid");
            var adc = idsJugsSel.getAttribute("iddeladc");
            var supp = idsJugsSel.getAttribute("iddelsupp");

            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Jugador?filter=ID,eq,' + top)
                .then(response => {
                    this.jugTop = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));

            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Jugador?filter=ID,eq,' + jun)
                .then(response => {
                    this.jugJung = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));

            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Jugador?filter=ID,eq,' + mid)
                .then(response => {
                    this.jugMid = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));

            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Jugador?filter=ID,eq,' + adc)
                .then(response => {
                    this.jugAdc = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));

            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Jugador?filter=ID,eq,' + supp)
                .then(response => {
                    this.jugSupp = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
    }
});


function ocultarSelect() {}