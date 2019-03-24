<template>
    <div class="shopcard">
        <button @click.prevent="addToCard" 
        class="btn btn-full-rounded hover has-tooltip" 
        data-placement="top" 
        v-data-original-title="message"
        >Add to Cart</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('id is ' + this.id + " " + price)
        },
        data: function () {
            return {
              message: 'Price: '
            }
         },

        props: [
            'id', 'price'
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
