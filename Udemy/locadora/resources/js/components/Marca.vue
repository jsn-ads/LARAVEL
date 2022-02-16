<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Marcas</div>

                    <div class="card-body">
                        <div class="form-row">
                            <div class="col mb-3">
                                <label for="inputId" class="form-label">ID</label>
                                <input type="number" class="form-control" id="inputId" aria-describedby="idHelp" placeholder="ID">
                                <div id="inputId" class="form-text text-muted">Opcional. Informe o ID</div>
                            </div>
                            <div class="col mb-3">
                                <label for="inputMarca" class="form-label">Marca</label>
                                <input type="text" class="form-control" id="inputMarca" placeholder="Marca">
                                <div id="inputMarca" class="form-text text-muted">Opcional. Informe o a Marca</div>
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
