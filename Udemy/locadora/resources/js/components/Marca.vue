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
                        <tabela-component></tabela-component>
                    </template>

                    <template v-slot:rodape>
                        <button type="submit" class="btn btn-primary btn-sm float-right">Adicionar</button>
                    </template>
                </card-component>
                <!-- card tabela end -->

            </div>
        </div>
    </div>
</template>

<script>

</script>
