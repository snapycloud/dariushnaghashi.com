<template>
    <div>
        <div v-if="selected" class="alert alert-success alert-dismissible fade show" role="alert"> This Item Added To Shopping List  <a @click.prevent="getShopCard" class="alert-link">Go Pay</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
          </div>

    <div class="shopcard">
        <button @click.prevent="addToCard" 
        class="btn btn-full-rounded hover has-tooltip" 
        data-placement="top" 
        :data-original-title="message"
        v-if="!selected"
        >Add to Cart</button>

    </div>
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
                if(this.selected == false){
                    this.selected = true
                }
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
