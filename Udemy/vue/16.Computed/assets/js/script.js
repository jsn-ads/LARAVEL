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
    computed : {
        ultimoPaciente(){

            let key =  this.pacientes.lenght -1

            let paciente = array()

            paciente = {
                'nome' : this.pacientes[key].nome ,
                'idade': this.pacientes[key].idade,
                'plano': this.pacientes[key].plano,
            }

            console.log(paciente)

            return paciente

        }
    }
})