<template>
    <div>

    <div class="shopcardgallery">
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
            this.$session.start()
            this.message += this.price + " IIR"
            this.key = 'client-' + this.clientIp;
            var shop = this.$session.get(this.key)
            let self = this
            var selected = shop.filter(function(e) { 
                return e === self.id
            })
            if (selected.length) {
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
                        console.log(e, self.id, e !== self.id, e != self.id);
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
    .shopcardgallery {
        position: absolute;
        right: 0px;
        bottom: 20px;
        opacity: 0.9;
        z-index: 9999;
    }
    .alertgallery {
        top: 11px;
        position: absolute;
        right: 0px;
        width: 100%;
        z-index: 9999;
        color: black !important;
    }
    .alertgallery p {
        color: black !important;
    }
</style>
