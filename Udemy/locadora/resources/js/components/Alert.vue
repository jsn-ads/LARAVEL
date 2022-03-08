<template>
    <div :class="estilo" role="alert">
        {{titulo}}
        <hr>
        <span v-if="msg.data.message">{{msg.data.message}}</span>
        <hr>
        <ul v-if="msg.data.errors">
            <li v-for="e , key in msg.data.errors" :key="key">{{e[0]}}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        props:['tipo','msg', 'titulo'],
        computed:{
            estilo(){
                return 'alert alert-'+this.tipo
            }
        }
    }
</script>
