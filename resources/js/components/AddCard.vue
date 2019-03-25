<template>
    <div class="shopcard">
        <button @click.prevent="addToCard" 
        class="btn btn-full-rounded hover has-tooltip" 
        data-placement="top" 
        :data-original-title="message"
        v-if="!selected"
        >Add to Cart</button>

        <button @click.prevent="confirmedItem" 
        class="btn btn-red btn-full-rounded" 
        :v-if="confirmed"
        >Pay</button>

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
              selected: false,
              confirmed: false,
            }
         },

        props: [
            'id', 'price'
        ],

        methods: {
            addToCard(){
                this.selected = true
                this.confirmed = true
            },
            getShopCard(){
                return window.location = "https://dariushnaghashi.com/store/card/"
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
