var Perfil = new Vue({
    el: '#perfil',
    data: {
        perfilUsuario: null,
        selecJugar: null,
    },
    created: function() {
        this.getInfoUser();
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
            document.getElementById("mostrarSelect").textContent = "Ocultar Mi Selección";
            document.getElementById("mostrarSelect").setAttribute("onclick", "ocultarSelect()");
            axios.get('http://esports-madness.electronica-garcilaso.cat/API/api.php/records/SeleccionJugador')
                .then(response => {
                    this.selecJugar = response.data.records,
                        console.table(response.data);
                })
                .catch(error => console.error(error));
        },
    }
});


function ocultarSelect() {}