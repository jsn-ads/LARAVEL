<template>
    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" v-for="t , key in titulo" :key="key">{{t}}</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="m in dados" :key=m.id>
                    <th scope="row">{{m.id}}</th>
                    <td>{{m.nome}}</td>
                    <td><img :src="'/storage/'+m.imagem" alt="" width="40px" height="40px"></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props:['dados','titulo']
    }
</script>
