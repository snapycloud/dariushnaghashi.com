<template>
    <div class="shopcard">
        <a href="#" @click.prevent="addToCard" class="btn btn-full-rounded hover has-tooltip" style="">Add to Cart</a>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('id is ' + this.id)
        },

        props: [
            'id'
        ],

        methods: {
            addToCard(){
                console.log('clicked id: ' + this.id);
            }
        }
    }
</script>

<style>
    .shopcard {
        position: absolute;
        right: 50px
    }
</style>
