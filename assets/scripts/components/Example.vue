<template>
<div class="row">
    <div class="col-sm-12 my-3">
        <div class="card">
            <div class="card-header">
                {{ title }}
            </div>

            <div class="card-block">
                {{ body }}
            </div>

        </div>
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