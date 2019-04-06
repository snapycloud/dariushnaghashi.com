<template>
    <div>
        <div v-if="selected" class="alert alert-success alert-dismissible fade show" role="alert">
            Added To Shopping List  
            <a @click.prevent="getShopCard" class="alert-link">Go Pay</a>
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
            var shop = this.$session.get(this.key)
            console.log(shop);
            this.$session.start()
            this.message += this.price + " IIR"
            this.key = 'client-' + this.clientIp;
            var shop = this.$session.get(this.key)
            var selected = shop.filter(function(e) { 
                return e === this.id
            })
            if (selected) {
                this.selected = true;
            }
        },
        data: function () {
            return {
              message: 'Price: ',
              selected: false,
              key: false,
              clientIp: '127.0.0.1'
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

                    var shop = this.$session.get(this.key)
                    if(shop) {
                        shop.push(this.id)
                        this.$session.set(this.key, shop)
                    } else {
                        var card = [this.id]
                        this.$session.set(this.key, card )
                    }
                

                    // add to backend
                }
            },
            removeOfCard(){
                let self = this
                if(self.selected == true){
                    self.selected = false
                    var shop = self.$session.get(self.key)
                    shop = shop.filter(function(e) { 
                        return e !== self.id
                    })
                    console.log(shop);
                    self.$session.set(self.key, shop)

                    // remove form backend
                }
            },
            getShopCard(){
                return window.location = "https://dariushnaghashi.com/shop/card/"
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
