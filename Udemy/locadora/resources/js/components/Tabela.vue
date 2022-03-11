<template>
    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="text-uppercase" v-for="t , key in titulo" :key="key"><span class="strong">{{t}}</span></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="obj , key in dados" :key="key">
                    <td></td>
                </tr>

                <!-- <tr v-for="obj in dados" :key=obj.id>
                    <td v-for="valor , chave in obj" :key="chave">
                        <div v-if="titulo.includes(chave)">
                            <span v-if="chave == 'imagem'">
                                <img :src="'/storage/'+valor" alt="" width="40px" height="40px">
                            </span>
                            <span v-else>
                                {{valor}}
                            </span>
                        </div>
                    </td>
                </tr> -->
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props:['dados','titulo'],
        computed:{
            dadosFiltrados(){

                let campos = Object.keys(this.titulo)

                this.dados.map((item, chave) =>{
                    let itemFiltrado = {}
                    campos.forEach(campo =>{
                        itemFiltrado[campo] = item[campo]
                    })
                })

                return ''
            }
        }
    }
</script>
