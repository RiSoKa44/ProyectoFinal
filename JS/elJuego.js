var Fantasy = new Vue({
    el: '#elJuego',
    data: {
        equipos: null,
    },

    getEquipos: function(ID) {
        this.jugadores = null;
        this.entrenadores = null;
        axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/Equipos?filter=ID_Liga,eq,' + ID)
            .then(response => {
                this.equipos = response.data.records,
                    console.table(response.data);
            })
            .catch(error => console.error(error));
    },
});