Vue.component('componente-todo',{
    template: `
        <li v-if="component.completed===true" class="task done" @click="updateTodo(component._id, component.completed)">{{ component.name }}<span @click="deleteTodo(component._id)">X</span></li>
        <li v-else class="task" @click="updateTodo(component._id, component.completed)">{{ component.name }}<span @click="deleteTodo(component._id)">X</span></li>
    `,
    props: ['component'],
    data(){
        return{
        }
    },
    methods:{
        deleteTodo: function(id){
            this.$parent.DELETETODO(id)
        },
        updateTodo: function(id, status){
            this.$parent.UPDATETODO(id,status)
        },
    }
});