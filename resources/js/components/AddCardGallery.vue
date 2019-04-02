<template>
    <div>
        <div v-if="selected" class="alert alert-success alert-dismissible fade show" role="alert">
            <p>Added To Shopping List  
<a @click.prevent="getShopCard" class="alert-link">Go Pay</a>
            </p>
            
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
          </div>

    <div class="shopcard">
        <button @click.prevent="addToCard" 
        class="btn btn-full-rounded hover has-tooltip" 
        data-placement="top" 
        :data-original-title="message"
        v-if="!selected"
        >Add to Cart</button>

        <button @click.prevent="removeOfCard" 
        class="btn btn-red btn-full-rounded btn-full-rounded" 
        v-if="selected"
        >Remove Of Cart</button>

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
                    $('.has-tooltip').tooltip("hide")
                    this.selected = true

                    // add to backend
                }
            },
            removeOfCard(){
                if(this.selected == true){
                    this.selected = false

                    // remove form backend
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
        right: 0px;
        bottom: 20px;
        opacity: 0.9;
        z-index: 9999;
    }
    .alert {
        top: 11px;
        position: absolute;
        right: 0px;
        width: 100%;
        z-index: 9999;
        color: black !important;
    }
    .alert p {
        color: black !important;
    }
</style>
