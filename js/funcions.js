var todo = new Vue({
    el: '#todo',
    data: {
        tareas: null,
    },
    created: function(){
        this.GETTODOS();
    },
    mounted: function(){
        document.getElementById("todoInput").addEventListener('keyup', function(event){
            if(event.keyCode===13){
                todo.POSTTODO();
            }
        })
    },

    methods: {
        GETTODOS: function() {
            axios.get('http://esports-madness.electronica-garcilaso.cat/')
                .then(response => {
                    this.tareas = response.data,
                    console.table(response.data);
                })
                .catch(error => console.error(error));
        },

        DELETETODO: function(id) {
            axios.delete(`http://esports-madness.electronica-garcilaso.cat`).then(
                this.GETTODOS()
            )
            .catch(error => console.error(error))
        },

        UPDATETODO: function(id, status){
            let isDone=status?false:true;
            axios.put(`http://esports-madness.electronica-garcilaso.cat/`,{'completed' : isDone}).then(
                this.GETTODOS()
            )
            .catch(error => console.error(error));
        },

        POSTTODO: function() {
            let newTodo = document.getElementById("todoInput").value
            axios.post(`http://esports-madness.electronica-garcilaso.cat/`, { "name": newTodo })
                .then(
                    this.UPDATETODO()
                )
                .catch(error => console.error(error));
        }
    }
})