<template>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <h2>{{ title }}</h2>
        {{ body }}
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            this.basicFunction();
        },

        props: ['title', 'body'],

        methods: {
            basicFunction(){
               console.log('Component mounted.');
            }
        }
    }
</script>