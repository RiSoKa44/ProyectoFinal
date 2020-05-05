var Fantasy = new Vue({
    el: '#proyecto',
    data: {
        equipos: [],
        juegos: null,
        ligas: null,
    },
    created: function() {
        this.GETTODOS();
        this.GETTODOS2();
        this.GETTODOS3();
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
    }
})