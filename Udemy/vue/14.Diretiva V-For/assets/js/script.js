const vm = new Vue({
    el:"#app",
    data() {
        return {
            lista  : [
                'laravel',
                'vue',
                'mysql',
                'bootstrap'
            ],

            cursos : [
                 {
                    nome: "laravel",
                    descricao : "framework de php"
                },
                {
                    nome: "vue",
                    descricao : "framework de javascript"
                }
            ],
        }
    },
    methods: {

    },
})