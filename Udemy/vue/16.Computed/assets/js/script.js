const vm = new Vue({
    el:"#app",
    data() {
        return {
            pacientes : []
        }
    },
    methods: {
       adicionar(){
           this.pacientes.push({
               nome : inputNome.value,
               idade : inputIdade.value,
               plano : inputPlano.value
           });

           console.log(this.pacientes)
        }
    },
})