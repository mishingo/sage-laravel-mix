<template>
<div class="row">
    <div class="col-sm-12 my-3">
        <div class="card">
            <div class="card-header">Example Component</div>

            <div v-if="myVar" class="card-block">
                I'm an example vue-component!
            </div>
            <div v-else class="card-block">
                {{msg}}
            </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            this.myExample();
            console.log('Component mounted.')
        },
        data: function(){
            return {
                myVar: false,
                msg: 'This is an error!'
            }
        },
        // props: ['content'],
        methods: {
            myExample(){
               this.myVar = true; 
            }
        }
    }
</script>