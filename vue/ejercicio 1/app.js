var app = new Vue ({
    el: '#app',
    data: {
        message: 'Hola Jhoanes'
    }
})

//Cambio de mensaje
app.message = 'Mensaje cambiado'

var app2 = new Vue ({
    el: '#app2',
    data: {
        message: 'Cargaste la pagina el '+ new Date().toLocaleString()
    }
})

//Cambio de mensaje
app2.message = 'Mensaje cambiado'


/*Condicionales y bucles*/
var app3 = new Vue({
    el: '#app3',
    data: {
        seen: true
    }
})
//Ahora no me ves
app3.seen = false


var app4 = new Vue({
    el: '#app4',
    data: {
        todos: [
            { text: 'Aprender JavaScript' },
            { text: 'Aprender Vue' },
            { text: 'Construir algo increible' }
        ]
    }
})
//Nuevo li
app4.todos.push ({ text: 'Tu jefa' })


var app5 = new Vue({
    el: '#app5',
    data: {
        message: 'Hola vue.js'
    },
    methods: {
        reverseMessage: function(){
            this.message = this.message.split('').reverse().join('')
        }
    }
})


var app6 = new Vue({
    el: '#app6',
    data: {
        message: 'Hello'
    }
})

/*Componentes*/
Vue.component('todo-item', {
    props: ['todo'],
    template: '<li>{{ todo.text }}</li>'
})
var app7 = new Vue({
    el: '#app7',
    data: {
        groceryList:[
            { id: 0, text: 'Tomates'},
            { id: 1, text: 'Lechugas'},
            { id: 2, text: 'Azucar'},
        ]
    }
})