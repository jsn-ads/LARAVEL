<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- card pesquisa ini -->
                <card-component titulo="Pesquisar Marcas">
                    <template v-slot:conteudo>
                        <div class="form-row">
                            <div class="col mb-3">
                                <input-container-component id="inputId" titulo="ID" id-help="idHelp" texto-ajuda="Opcional. Informe o ID" >
                                    <input type="number" class="form-control" id="inputId" aria-describedby="idHelp" placeholder="ID">
                                </input-container-component>
                            </div>

                            <div class="col mb-3">
                                <input-container-component id="inputMarca" titulo="Marca" id-help="idHelp" texto-ajuda="Opcional. Informe a Marca" >
                                    <input type="text" class="form-control" id="inputMarca" placeholder="Marca">
                                </input-container-component>
                            </div>

                        </div>
                    </template>

                    <template v-slot:rodape>
                        <button type="submit" class="btn btn-primary btn-sm float-right">Pesquisar</button>
                    </template>

                </card-component>
                <!-- card pesquisa end -->

                <!-- card tabela ini -->
                <card-component titulo="Tabela de Marcas">

                    <template v-slot:conteudo>
                        <tabela-component
                            :dados="marcas"
                            :titulo="{
                                id:{
                                    titulo: 'ID',
                                    tipo:   'texto'
                                },
                                nome:{
                                    titulo: 'Nome',
                                    tipo:   'texto'
                                },
                                imagem:{
                                    titulo: 'Imagem',
                                    tipo:   'imagem'
                                },
                                created_at:{
                                    titulo: 'Data de criação',
                                    tipo:   'data'
                                }
                            }">
                        </tabela-component>
                    </template>

                    <template v-slot:rodape>
                        <button type="submit" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#modal_marca">Adicionar</button>
                    </template>

                </card-component>
                <!-- card tabela end -->

                <!-- modal init -->
                <modal-component id="modal_marca" titulo="Adicionar Marca">

                    <template v-slot:alertas>
                        <alert-component tipo="danger" :msg="alertMensagem" titulo="Erro ao adicionar" v-if="alertStatus == 'erro'">

                        </alert-component>

                        <alert-component tipo="success" :msg="alertMensagem" titulo="Registro adicionado com sucesso" v-if="alertStatus == 'sucesso'">

                        </alert-component>
                    </template>

                    <template v-slot:conteudo>

                        <div class="form-group">
                            <input-container-component id="inputNovoMarca" titulo="Marca" id-help="idMarcaHelp" texto-ajuda="Insira uma nova Marca" >
                                <input type="text" class="form-control" id="inputNovoMarca" placeholder="Adicionar Marca" v-model="nomeMarca">
                            </input-container-component>
                        </div>

                        <div class="form-group">
                            <input-container-component id="inputImagemMarca" titulo="Imagem" id-help="idImagemHelp" texto-ajuda="Insira uma Imagem PNG" >
                                <input type="file" class="form-control-file" id="inputImagemMarca" @change="carregarImagem($event)">
                            </input-container-component>
                        </div>

                    </template>

                    <template v-slot:rodape>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary" @click="salvar()">Salvar</button>
                    </template>

                </modal-component>
                <!-- modal end  -->
            </div>
        </div>
    </div>
</template>

<script>

    import axios from "axios"

    export default{
        data (){
            return {
                urlBase : 'http://localhost:8000/api/lc/marca',
                nomeMarca : '',
                arquivoImagem : [],
                alertStatus : '',
                alertMensagem : {},
                marcas : [],
                config : {
                    headers:{
                        'Content-Type': 'multipart/form-data',
                        'Accept': 'application/json',
                        'Authorization': this.token
                    }
                }
            }
        },
        computed:{
            token(){
                let token = document.cookie.split(';').find(indice =>{
                    return indice.includes('token=')
                })

                token = token.split('=')[1]
                token = 'Bearer' + token
                return token

            }
        },
        methods: {
            carregarLista(){
                axios.get(this.urlBase , this.config)
                    .then(response=>{
                        this.marcas = response.data
                    })
                    .catch( errors =>{
                        console.log(errors)
                    })
            },
            carregarImagem(e){
                this.arquivoImagem = e.target.files
            },
            salvar(){

                //formulario de envio para API

                let formData = new FormData();

                formData.append('nome', this.nomeMarca)
                formData.append('imagem', this.arquivoImagem[0])

                axios.post(this.urlBase , formData , this.config)
                    .then( response => {
                        this.alertStatus = 'sucesso'
                        this.alertMensagem = response

                    }).catch( errors => {
                        this.alertStatus = 'erro'
                        this.alertMensagem = {
                            mensagem : errors.response.data.message,
                            dados : errors.response.data.errors
                        }
                    })
            }
        },
        mounted(){
            this.carregarLista()
        }
    }
</script>
