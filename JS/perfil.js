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
            var mises = document.getElementById("sess").getAttribute("class");
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Usuarios?filter=ID,eq,' + mises)
                .then(response => {
                    this.perfilUsuario = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
        getSeleccion: function() {
            var mises = document.getElementById("sess").getAttribute("class");
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/SeleccionJugador?filter=Usuario,eq,' + mises)
                .then(response => {
                    this.selecJugar = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
        getJugadoresSelecteds: function() {
            var mises = document.getElementById("sess").getAttribute("class");

            var idsJugsSel = document.getElementById("idsJugadoresSel");
            var nuevaSel = document.getElementById("fichasSelec");
            nuevaSel.setAttribute("onclick", "ocultarSelect()");
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