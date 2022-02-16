<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Marcas</div>

                    <div class="card-body">
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
                    </div>

                    <div class="card-footer">
                         <button type="submit" class="btn btn-primary btn-sm float-right">Pesquisar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

</script>
