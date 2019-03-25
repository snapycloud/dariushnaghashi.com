<template>
    <div class="shopcard">
        <button @click.prevent="addToCard" 
        class="btn btn-full-rounded hover has-tooltip" 
        data-placement="top" 
        :data-original-title="message"
        :disabled="selected"
        >Add to Cart</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.message += this.price + " IIR"
        },
        data: function () {
            return {
              message: 'Price: ',
              selected: false
            }
         },

        props: [
            'id', 'price'
        ],

        methods: {
            addToCard(){
                this.selected = true
            }
        }
    }
</script>

<style>
    .shopcard {
        position: absolute;
        right: 60px;
        bottom: 3px;
        opacity: 0.9;
    }
</style>
