<template>
    <div :class="estilo" role="alert">
        {{msg}}
    </div>
</template>

<script>
    export default {
        props:['tipo','msg'],
        computed:{
            estilo(){
                return 'alert alert-'+this.tipo
            }
        }
    }
</script>
